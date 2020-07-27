<?php

return [
    'app_key_is_set' => [
        'message' => '未設置應用程式金鑰。透過執行 "php artisan key:generate" 幫你設定完成。',
        'name' => '應用程式金鑰已經設定',
    ],
    'composer_with_dev_dependencies_is_up_to_date' => [
        'message' => '你的 Composer 相依性套件不是最新的。透過執行 "composer install" 更新所有項目的相依性套件。 :more',
        'name' => 'Composer 相依性（包括 dev）是最新的',
    ],
    'composer_without_dev_dependencies_is_up_to_date' => [
        'message' => '你的 Composer 相依性套件不是最新的。透過執行 "composer install" 更新所有項目的相依性套件。 :more',
        'name' => 'Composer 相依性（不包括 dev）是最新的',
    ],
    'configuration_is_cached' => [
        'message' => '您的設定應快取在正式環境中以提高效能。透過執行 "php artisan config:cache" 將所有的設定檔快取存到單一檔案。',
        'name' => '設定檔已經快取',
    ],
    'configuration_is_not_cached' => [
        'message' => '您的設定檔案不應該在開發環境中快取。透過執行 "php artisan config:clear" 用來清除設定檔快取。',
        'name' => '設定檔沒有快取',
    ],
    'correct_php_version_is_installed' => [
        'message' => '您沒有安裝所需的 PHP 版本。' . PHP_EOL . '必要： :required' . PHP_EOL . '使用： :used',
        'name' => '正確的 PHP 版本已安裝',
    ],
    'database_can_be_accessed' => [
        'message' => '無法訪問資料庫： :error',
        'name' => '可以訪問資料庫',
    ],
    'debug_mode_is_not_enabled' => [
        'message' => '您不應在正式環境中使用除錯模式。設置 "APP_DEBUG" 在 .env 檔案為 "false"。',
        'name' => '除錯模式是關閉的',
    ],
    'directories_have_correct_permissions' => [
        'message' => '以下目錄不可寫：' . PHP_EOL .':directories',
        'name' => '全部目錄都具有正確的權限',
    ],
    'env_file_exists' => [
        'message' => '.env 檔案不存在。請將您的 .env.example 檔案複製為 .env 並進行相應調整。',
        'name' => '環境檔案存在',
    ],
    'example_environment_variables_are_set' => [
        'message' => '.env 檔案中缺少這些環境變數，但在 .env.example 中定義了這些環境變數：' . PHP_EOL . ':variables',
        'name' => '範例環境變數已設置',
    ],
    'example_environment_variables_are_up_to_date' => [
        'message' => '這些環境變數在 .env 檔案中定義，但在 .env.example 中缺少：' . PHP_EOL . ':variables',
        'name' => '範例環境變數是最新的',
    ],
    'horizon_is_running' => [
        'message' => [
            'not_running' => 'Horizo​​n 沒有運行。',
            'unable_to_check' => '無法檢查 Horizo​​n： :reason',
        ],
        'name' => 'Horizo​​n 正在運行',
    ],
    'locales_are_installed' => [
        'message' => [
            'cannot_run_on_windows' => '此檢查不能在 Windows 上運行。',
            'locale_command_not_available' => '"locale -a" 指令在當前作業系統上無法使用。',
            'missing_locales' => '缺少以下在地化：' . PHP_EOL . ':locales',
            'shell_exec_not_available' => '函數 "shell_exec" 未定義或被關閉，因此我們無法檢查在地化。',
        ],
        'name' => '已安裝需要的在地化',
    ],
    'maintenance_mode_not_enabled' => [
        'message' => '維護模式仍處於啟用狀態。用 "php artisan up" 關閉維護模式。',
        'name' => '維護模式沒有啟用',
    ],
    'migrations_are_up_to_date' => [
        'message' => [
            'need_to_migrate' => '您需要更新資料庫。透過執行 "php artisan migrate" 來執行遷移。',
            'unable_to_check' => '無法檢查遷移： :reason',
        ],
        'name' => '遷移是最新的',
    ],
    'php_extensions_are_disabled' => [
        'message' => '以下延伸函式庫已啟用：' . PHP_EOL . ':extensions',
        'name' => '不需要的 PHP 延伸函式庫已經關閉',
    ],
    'php_extensions_are_installed' => [
        'message' => '缺少以下延伸函式庫：' . PHP_EOL . ':extensions',
        'name' => '需要的 PHP 延伸函式庫已經安裝',
    ],
    'redis_can_be_accessed' => [
        'message' => [
            'not_accessible' => 'Redis 快取無法存取： :error',
            'default_cache' => '預設快取無法連線。',
            'named_cache' => '命名的快取 :name 無法連線。',
        ],
        'name' => 'Redis 快取無法存取',
    ],
    'routes_are_cached' => [
        'message' => '您的路由應該快取在正式環境中以提高效能。透過執行 "php artisan route:cache" 建立路由快取。',
        'name' => '路由已經快取',
    ],
    'routes_are_not_cached' => [
        'message' => '在開發過程中不應快取您的路由。透過執行 "php artisan route:clear" 清除路由快取。',
        'name' => '路由沒有快取',
    ],
    'servers_are_pingable' => [
        'message' => "伺服器 ':host'（埠號： :port）無法連線（逾時值 :timeout seconds）。",
        'name' => '所需的伺服器可連線',
    ],
    'storage_directory_is_linked' => [
        'message' => '儲存目錄沒有連結。使用 "php artisan storage:link" 用來建立連結符號。',
        'name' => '儲存目錄已經連結',
    ],
    'supervisor_programs_are_running' => [
        'message' => [
            'cannot_run_on_windows' => '此檢查不能在 Windows 上運行。',
            'not_running_programs' => '以下程式未運行或需要重新啟動：' . PHP_EOL . ':programs',
            'shell_exec_not_available' => '函數 "shell_exec" 未定義或被關閉，因此我們無法檢查正在運行的程式。',
            'supervisor_command_not_available' => '"supervisorctl" 指令在當前作業系統上不可用。',
        ],
        'name' => '所有進程管理程式正在運行',
    ],
];
