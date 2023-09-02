<?php

return [
    'name' => '名稱',
    'email' => '郵箱',
    'image' => '圖片',
    'expire_at' => '過期時間',
    'username' => '用戶',
    'status' => '狀態',
    'enabled' => '啟用',
    'disabled' => '禁用',
    'created_at' => '創建時間',
    'updated_at' => '更新時間',
    'begin' => '開始時間',
    'end' => '結束時間',
    'uploaded' => '上傳量',
    'downloaded' => '下載量',
    'ratio' => '分享率',
    'seed_time_required' => '還需做種時間',
    'inspect_time_left' => '考察剩余時間',
    'added' => '添加時間',
    'last_access' => '最後訪問時間',
    'priority' => '優先級',
    'priority_help' => '值越大，越靠前',
    'comment' => '備註',
    'duration' => '時長',
    'description' => '描述',
    'price' => '價格',
    'deadline' => '截止時間',
    'permanent' => '永久有效',
    'operator' => '操作者',
    'action' => '操作',
    'submit' => '提交',
    'cancel' => '取消',
    'reset' => '重置',
    'anonymous' => '匿名',
    'infinite' => '無限',
    'save' => '保存',
    'country' => '國家',
    'city' => '城市',
    'client' => '客戶端',
    'reason' => '原因',
    'setting' => [
        'nav_text' => '設置',
        'backup' => [
            'tab_header' => '備份',
            'enabled' => '是否啟用',
            'enabled_help' => '是否啟用備份功能',
            'frequency' => '頻率',
            'frequency_help' => '備份頻率',
            'hour' => '小時',
            'hour_help' => '在這個點鐘數進行備份',
            'minute' => '分鐘',
            'minute_help' => "在前面點鐘數的這一分鐘進行備份。如果頻率是按 'hourly'，此值會被忽略",
            'google_drive_client_id' => 'Google Drive client ID',
            'google_drive_client_secret' => 'Google Drive client secret',
            'google_drive_refresh_token' => 'Google Drive refresh token',
            'google_drive_folder_id' => 'Google Drive folder ID',
            'via_ftp' => '通過 FTP 保存',
            'via_ftp_help' => '是否通過 FTP 保存。如果通過，把配置信息添加到 .env 文件，參考 <a href="https://laravel.com/docs/master/filesystem#ftp-driver-configuration">Laravel 文檔</a>',
            'via_sftp' => '通過 SFTP 保存',
            'via_sftp_help' => '是否通過 SFTP 保存。如果通過，把配置信息添加到 .env 文件，參考 <a href="https://laravel.com/docs/master/filesystem#sftp-driver-configuration">Laravel 文檔</a>',
        ],
        'hr' => [
            'tab_header' => 'H&R',
            'mode' => '模式',
            'inspect_time' => '考察時長',
            'inspect_time_help' => '考察時長自下載完成後開始計算，單位：小時',
            'seed_time_minimum' => '達標做種時長',
            'seed_time_minimum_help' => '達標的最短做種時長，單位：小時，必須小於考察時長',
            'ignore_when_ratio_reach' => '達標分享率',
            'ignore_when_ratio_reach_help' => '達標的最小分享率',
            'ban_user_when_counts_reach' => 'H&R 數量上限',
            'ban_user_when_counts_reach_help' => 'H&R 數量達到此值，賬號會被禁用',
        ],
        'seed_box' => [
            'tab_header' => 'SeedBox',
            'enabled_help' => '是否啟用 SeedBox 規則',
            'no_promotion' => '無優惠',
            'no_promotion_help' => '不享受任何優惠，上傳量/下載量按實際值計算',
            'max_uploaded' => '最大上傳量倍數',
            'max_uploaded_help' => '總上傳量最多為其體積的多少倍。設置為 0 無此限製',
            'not_seed_box_max_speed' => '非 SeedBox 最高限速',
            'not_seed_box_max_speed_help' => '單位：Mbps。若超過此值又不能匹配 SeedBox 記錄，禁用下載權限',
            'max_uploaded_duration' => '最大上傳量倍數有效時間範圍',
            'max_uploaded_duration_help' => '單位：小時。種子發布後的這個時間範圍內，最大上傳量倍數生效，超過此範圍不生效。設置為 0 一直生效',
        ],
        'meilisearch' => [
            'tab_header' => 'Meilisearch',
            'enabled' => '是否啟用 Meilisearch',
            'enabled_help' => '請先安裝配置好並導入數據再啟用，否則種子搜索無數據',
            'search_description' => '是否搜索描述',
            'search_description_help' => "默認：'否'。若為'是'，描述中包含關鍵字也會返回，命中的結果可能較多。修改後需立即重新導入",
            'default_search_mode' => '默認搜索模式',
            'default_search_mode_help' => "默認：'準確'。'與'將進行分詞，'準確'不分詞",
        ],
        'system' => [
            'tab_header' => '系統',
            'change_username_card_allow_characters_outside_the_alphabets' => '改名卡是否允許英文字母外的字符',
            'change_username_min_interval_in_days' => '修改用戶名最小間隔天數',
            'maximum_number_of_medals_can_be_worn' => '勛章最大可佩戴數',
            'cookie_valid_days' => 'Cookie 有效天數',
            'maximum_upload_speed' => '最大上傳速度',
            'maximum_upload_speed_help' => '單種上傳速度超過此值賬號即刻禁用，單位 Mbps。如：100 Mbps = 12.5 MB/s',
            'is_invite_pre_email_and_username' => '邀請是否預定郵箱和用戶名',
            'is_invite_pre_email_and_username_help' => "默認: 'No'。若預定，用戶註冊時不可修改郵箱和用戶名",
            'access_admin_class_min' => '登錄管理後臺最小等級',
            'access_admin_class_min_help' => '默認：管理員，用戶等級大於等於設定值的用戶可以登錄管理後臺',
        ],
    ],
    'user' => [
        'label' => '用戶',
        'uploaded' => '上傳量',
        'downloaded' => '下載量',
        'invites' => '邀請',
        'seedbonus' => '魔力',
        'attendance_card' => '補簽卡',
        'class' => '等級',
        'status' => '狀態',
        'enabled' => '啟用',
        'username' => '用戶名',
        'invite_by' => '邀請人',
        'two_step_authentication' => '兩步驗證',
        'seed_points' => '做種積分',
        'downloadpos' => '下載權限',
        'parked' => '掛起',
        'offer_allowed_count' => '候選通過數',
        'tmp_invites' => '臨時邀請',
    ],
    'medal' => [
        'label' => '勛章',
        'image_large' => '大圖',
        'image_small' => '小圖',
        'get_type' => '獲取方式',
        'duration' => '有效時長',
        'duration_help' => '單位：天。如果留空，用戶永久擁有',
    ],
    'user_medal' => [
        'label' => '用戶勛章',
    ],
    'exam' => [
        'label' => '考核',
        'is_done' => '是否完成',
        'is_discovered' => '自動發現',
        'register_time_range' => [
            'begin' => '註冊時間開始',
            'end' => '註冊時間結束',
        ],
        'donated' => '是否捐贈',
        'index_formatted' => '考核指標',
        'filter_formatted' => '目標用戶',
        'section_base_info' => '基本信息',
        'priority_help' => '值越大，優先級越高。當用戶匹配多個考核時，優先級高的優先分配。',
        'section_time' => '時間',
        'duration_help' => '單位：天。分配給用戶時，如果指定了開始/結束時間，用戶考核的時間範圍就是這個範圍。否則，用戶考核的開始時間是分配時間，結束時間是開始時間加上時長。',
        'section_target_user' => '目標用戶',
        'index_required_value' => '要求量',
        'index_required_label' => '指標',
        'index_placeholder' => '上傳增量/下載增量單位為：GB，平均做種時間單位為：小時',
        'index_current_value' => '當前量',
        'index_result' => '結果',
    ],
    'exam_user' => [
        'label' => '用戶考核',
        'is_done' => '是否完成',
    ],
    'torrent' => [
        'label' => '種子',
        'owner' => '發布者',
        'size' => '大小',
        'ttl' => '存活時間',
        'seeders' => '做種',
        'leechers' => '下載',
        'times_completed' => '完成次數',
        'category' => '類型',
        'approval_status' => '審核狀態',
        'pos_state' => '置頂',
        'sp_state' => '優惠',
        'visible' => '活種',
        'source' => '來源',
        'codec' => '編碼',
        'audiocodec' => '音頻編碼',
        'medium' => '媒介',
        'team' => '製作組',
        'processing' => '處理',
        'standard' => '分辨率',
        'picktype' => '推薦',
        'promotion_time_type' => '優惠時間類型',
        'hr' => 'H&R',
        'added_begin' => '發布時間大於',
        'added_end' => '發布時間小於',
        'size_begin' => '體積大於',
        'size_end' => '體積小於',
        'price' => '價格',
        'price_help' => '用戶下載種子時，發布者將獲得收入，但要扣除相應稅率，當前稅率：:tax_factor',
        'max_price_help' => '允許最大值：:max_price',
    ],
    'hit_and_run' => [
        'label' => '用戶 H&R',
    ],
    'tag' => [
        'label' => '標簽',
        'color' => '背景顏色',
        'font_color' => '字體顏色',
        'font_size' => '字體大小',
        'margin' => '外邊距',
        'padding' => '內邊距',
        'border_radius' => '邊框圓角',
        'torrents_count' => '種子數',
        'torrents_sum_size' => '種子體積',
    ],
    'agent_allow' => [
        'label' => '允許客戶端',
        'family' => '系列',
        'start_name' => '起始名稱',
        'peer_id_start' => 'Peer ID 起始',
        'peer_id_pattern' => 'Peer ID 正則',
        'peer_id_matchtype' => 'Peer ID 匹配類型',
        'peer_id_match_num' => 'Peer ID 匹配次數',
        'agent_start' => 'Agent 起始',
        'agent_pattern' => 'Agent 正則',
        'agent_matchtype' => 'Agent 匹配類型',
        'agent_match_num' => 'Agent 匹配次數',
        'exception' => '排除',
        'allowhttps' => '允許 https',
    ],
    'agent_deny' => [
        'label' => '拒絕客戶端',
        'peer_id' => 'Peer ID 起始',
        'agent' => 'Agent',
    ],
    'claim' => [
        'label' => '用戶認領',
        'last_settle_at' => '上次結算時間',
        'seed_time_this_month' => '本月做種時間',
        'uploaded_this_month' => '本月上傳量',
        'is_reached_this_month' => '本月是否達標',
    ],
    'torrent_state' => [
        'label' => '全站優惠',
        'global_sp_state' => '全站優惠',
    ],
    'role' => [
        'class' => '關聯用户等級',
    ],
    'seed_box_record' => [
        'label' => 'SeedBox 記錄',
        'type' => '添加類型',
        'operator' => '運營商',
        'bandwidth' => '帶寬(Mbps)',
        'ip' => 'IP(段)',
        'ip_begin' => '起始 IP',
        'ip_end' => '結束 IP',
        'ip_help' => '填寫起始 IP + 結束 IP，或 IP(段)，不要同時填寫',
        'status' => '狀態',
        'is_allowed' => '是否白名單',
        'is_allowed_help' => '位於白名單中的 IP 不受 SeedBox 規則影響',
    ],
    'menu' => [
        'label' => '自定義菜單',
        'enable_help' => '是否啟用自定義菜單',
    ],
    'menu_item' => [
        'label' => '菜單項',
        'url' => '鏈接',
        'text' => '顯示文本',
        'target' => '打開方式',
        'style' => '樣式',
        'parent_id' => '父菜單',
        'min_class' => '最低可見等級',
    ],
    'user_meta' => [
        'meta_keys' => [
            \App\Models\UserMeta::META_KEY_CHANGE_USERNAME => '改名卡',
            \App\Models\UserMeta::META_KEY_PERSONALIZED_USERNAME => '彩虹 ID',
        ],
    ],
    'search_box' => [
        'label' => '分類模式',
        'name' => '名稱',
        'section_name' => '分區名稱',
        'section_name_help' => '若設置，顯示在菜單上',
        'is_default' => '是否默認',
        'showsubcat' => '次分類',
        'taxonomies' => '分類法',
        'taxonomy_display_text' => '顯示文案',
        'torrent_field' => '種子表字段',
        'catsperrow' => '每行項目數',
        'catsperrow_help' => "設置在搜索箱中每行顯示的項目數，如'8'。",
        'catpadding' => "項目間距",
        'catpadding_help' => "單位為像素。搜索箱中項目的水平間隔距離，如'3'。",
        'custom_fields' => '啟用自字義字段',
        'custom_fields_display_name' => '自定義字段展示名稱',
        'custom_fields_display' => '自定義字段展示',
        'custom_fields_display_help' => '使用特殊的標簽代表字段的名稱和值，如某字段其 Name 為 artist，則它的名稱為：<%artist.label%>，它的值為：<%artist.value%>',
        'category' => '分類',
        'torrent_field_duplicate' => '種子表字段：:field 不能重復使用！',
        'other' => '其他',
        'taxonomy' => [
            'name' => '名稱',
            'sort_index' => '排序',
            'sort_index_help' => "遞增排序，即'0'排在最前。",
            'class_name' => 'class屬性值',
            'class_name_help' => "為圖片指定class屬性值。若無請留空。允許的字符: [a-z]（小寫），[0-9]，[_]，第一個字符必須是字母。",
            'image' => '圖片文件名',
            'image_help' => '圖片文件的名字。允許的字符：[a-z]（小寫），[0-9]，[_./]。',
            'icon_id' => '分類圖標',
            'mode' => '分類模式',
            'mode_help' => '留空表示適用於全部分類模式',
        ],
    ],
    'icon' => [
        'label' => '分類圖標',
        'folder' => '圖標文件夾',
        'folder_help' => "分類圖標所在的文件夾名。允許的字符：[a-z]（小寫），[0-9]，[_./]。必須在末尾添加斜杠(/)，如'mycaticon/'",
        'cssfile' => 'CSS 文件',
        'cssfile_help' => "為此分類圖標指定CSS文件。填寫完整路徑，如'styles/scenetorrents.css'。若無請留空。允許的字符：[a-z]（小寫），[0-9]，[_./]。",
        'multilang' => '多語言',
        'multilang_help' => "是否為不同語言使用不同的分類圖標。如果設為'是'，將多份圖標分別放入命名如'en'，'chs'等的文件夾中。",
        'secondicon' => '第二圖標',
        'secondicon_help' => "是否使用第二圖標顯示補充信息。如果設為'是'，將第二圖標放入普通圖標目錄下命名為'additional'的文件夾中。",
        'designer' => '設計者',
        'designer_help' => '此圖標集的設計者。',
        'comment' => '說明',
        'comment_help' => '此圖標集的說明。',
        'desc' => "你必須將圖標文件放入服務器正確的目錄才能使得以下設定起作用。將普通的分類圖標放入'pic/category/分類模式名字/圖標文件夾[語言縮寫/]'，將第二圖標放入'pic/category/分類模式名字/圖標文件夾[語言縮寫/]additional/'.不明白？參考下面的例子：
當
    分類模式名字='nhd'
    圖標文件夾='scenetorrents/'
    多語言='是'
    第二圖標='否'
你應該將一個英語的電影類型的圖標（如'movies.png'）文件放入'pic/category/nhd/scenetorrents/en/'。
當
    分類模式名字='chd'
    圖標文件夾='nanosofts/'
    多語言='否'
    第二圖標='是'
你應該將一個電影類型的圖標（如'movies.png'）文件放入'pic/category/chd/nanosofts/'，將一個第二圖標（如'bdh264.png'）放入'pic/category/chd/nanosofts/additional/'。

註意：在 1.8 中，可以省略'分類模式名字'這一部分，即規則是'pic/category/圖標文件夾[語言縮寫/]'。
",
    ],
    'second_icon' => [
        'label' => '第二圖標',
        'name' => '名字',
        'name_help' => '不要使用過長的名字。建議在10個字母內。',
        'image' => "圖片文件名",
        'image_help' => "圖片文件的名字。允許的字符：[a-z]（小寫），[0-9]，[_./]。",
        'class_name' => 'class屬性值',
        'class_name_help' => "為圖片指定class屬性值。若無請留空。允許的字符: [a-z]（小寫），[0-9]，[_]，第一個字符必須是字母。",
        'select_section' => '選擇',
        'select_section_help' => "如果某個選擇未指定，其所有選項都符合此規則。必須至少指定一個選擇。",
    ],
];
