<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 'on');
error_reporting(E_ALL);

require_once __DIR__ . '/app/Helpers/helper.php';

require_once __DIR__ . '/vendor/autoload.php';

use Core\Router\Router;

(new Router)->run();
