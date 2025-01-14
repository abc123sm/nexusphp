<?php

namespace App\Models;

use Carbon\Carbon;
use Google\Service\Dataproc\RegexValidation;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Exam extends NexusModel
{
    protected $fillable = ['name', 'description', 'begin', 'end', 'duration', 'status', 'is_discovered', 'filters', 'indexes', 'priority'];

    public $timestamps = true;

    protected $casts = [
        'filters' => 'array',
        'indexes' => 'array',
    ];

    const STATUS_ENABLED = 0;
    const STATUS_DISABLED = 1;

    public static $status = [
        self::STATUS_ENABLED => ['text' => 'Enabled'],
        self::STATUS_DISABLED => ['text' => 'Disabled'],
    ];

    const DISCOVERED_YES = 1;
    const DISCOVERED_NO = 0;

    public static $discovers = [
        self::DISCOVERED_NO => ['text' => 'No'],
        self::DISCOVERED_YES => ['text' => 'Yes'],
    ];

    const INDEX_UPLOADED = 1;
    const INDEX_SEED_TIME_AVERAGE = 2;
    const INDEX_DOWNLOADED = 3;
    const INDEX_SEED_BONUS = 4;
    const INDEX_SEED_POINTS = 5;
    const INDEX_UPLOAD_TORRENT_COUNT = 6;

    public static array $indexes = [
        self::INDEX_UPLOADED => ['name' => 'Uploaded', 'unit' => 'GB', 'source_user_field' => 'uploaded'],
        self::INDEX_DOWNLOADED => ['name' => 'Downloaded', 'unit' => 'GB', 'source_user_field' => 'downloaded'],
        self::INDEX_SEED_TIME_AVERAGE => ['name' => 'Seed time average', 'unit' => 'Hour', 'source_user_field' => 'seedtime'],
        self::INDEX_SEED_BONUS => ['name' => 'Bonus', 'unit' => '', 'source_user_field' => 'seedbonus'],
        self::INDEX_SEED_POINTS => ['name' => 'Seed points', 'unit' => '', 'source_user_field' => ''],
        self::INDEX_UPLOAD_TORRENT_COUNT => ['name' => 'Upload torrent', 'unit' => '', 'source_user_field' => ''],
    ];

    const FILTER_USER_CLASS = 'classes';
    const FILTER_USER_REGISTER_TIME_RANGE = 'register_time_range';
    const FILTER_USER_DONATE = 'donate_status';
    const FILTER_USER_REGISTER_DAYS_RANGE = 'register_days_range';

    public static $filters = [
        self::FILTER_USER_CLASS => ['name' => 'User class'],
        self::FILTER_USER_REGISTER_TIME_RANGE => ['name' => 'User register time range'],
        self::FILTER_USER_DONATE => ['name' => 'User donated'],
        self::FILTER_USER_REGISTER_DAYS_RANGE => ['name' => 'User register days range'],
    ];

    protected static function booted()
    {
        static::saving(function (Model $model) {
            $model->duration = (int)$model->duration;
        });
    }

    public static function listIndex($onlyKeyValue = false): array
    {
        $result = self::$indexes;
        $keyValues = [];
        foreach ($result as $key => &$value) {
            $text = nexus_trans("exam.index_text_$key");
            $value['text'] = $text;
            $keyValues[$key] = $text;
        }
        if ($onlyKeyValue) {
            return $keyValues;
        }
        return $result;
    }

    public function getStatusTextAttribute(): string
    {
        return $this->status == self::STATUS_ENABLED ? nexus_trans('label.enabled') : nexus_trans('label.disabled');
    }

    public function getIsDiscoveredTextAttribute(): string
    {
        return self::$discovers[$this->is_discovered]['text'] ?? '';
    }

    public function getDurationTextAttribute(): string
    {
        if ($this->duration > 0) {
            return $this->duration . ' Days';
        }
        return '';
    }

    public function getIndexFormattedAttribute(): string
    {
        $indexes = $this->indexes;
        $arr = [];
        foreach ($indexes as $index) {
            if (isset($index['checked']) && $index['checked']) {
                $arr[] = sprintf(
                    '%s: %s %s',
                    nexus_trans("exam.index_text_{$index['index']}"),
                    $index['require_value'],
                    self::$indexes[$index['index']]['unit'] ?? ''
                );
            }
        }
        return implode("<br/>", $arr);
    }

    public function getFilterFormattedAttribute(): string
    {
        $currentFilters = $this->filters;
        $arr = [];
        $filter = self::FILTER_USER_CLASS;
        if (!empty($currentFilters[$filter])) {
            $classes = collect(User::$classes)->only($currentFilters[$filter]);
            $arr[] = sprintf('%s: %s', nexus_trans("exam.filters.$filter"), $classes->pluck('text')->implode(', '));
        }

        $filter = self::FILTER_USER_REGISTER_TIME_RANGE;
        if (!empty($currentFilters[$filter])) {
            $range = $currentFilters[$filter];
            if (!empty($range[0]) || !empty($range[1])) {
                $arr[] = sprintf(
                    "%s: <br/>%s ~ %s",
                    nexus_trans("exam.filters.$filter"),
                    $range[0] ? Carbon::parse($range[0])->toDateTimeString() : '--',
                    $range[1] ? Carbon::parse($range[1])->toDateTimeString() : '--'
                );
            }
        }

        $filter = self::FILTER_USER_REGISTER_DAYS_RANGE;
        if (!empty($currentFilters[$filter])) {
            $range = $currentFilters[$filter];
            if (!empty($range[0]) || !empty($range[1])) {
                $arr[] = sprintf(
                    "%s: %s ~ %s",
                    nexus_trans("exam.filters.$filter"),
                    $range[0] ?? "--",
                    $range[1] ?? '--'
                );
            }
        }

        $filter = self::FILTER_USER_DONATE;
        if (!empty($currentFilters[$filter])) {
            $donateStatus = collect(User::$donateStatus)->only($currentFilters[$filter]);
            $arr[] = sprintf('%s: %s', nexus_trans("exam.filters.$filter"), $donateStatus->pluck('text')->implode(', '));
        }

        return implode("<br/>", $arr);
    }

    protected function beginForUser(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value ? Carbon::parse($value) : Carbon::now()
        );
    }

    protected function endForUser(): Attribute
    {
        return new Attribute(
            get: function ($value, $attributes) {
                if ($value) {
                    return Carbon::parse($value);
                }
                if (!empty($attributes['duration'])) {
                    /** @var Carbon $begin */
                    $begin = $this->begin_for_user;
                    return $begin->clone()->addDays($attributes['duration']);
                }
                throw new \RuntimeException("No specific end or duration");
            }
        );
    }

}
