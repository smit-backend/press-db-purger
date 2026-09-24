<?php

return [
    'enabled' => env('PRESS_DB_PURGER_ENABLED', true),
    'timeout' => env('PRESS_DB_PURGER_TIMEOUT', 30),
    'log_channel' => env('PRESS_DB_PURGER_LOG', 'stack'),
];
