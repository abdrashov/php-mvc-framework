<?php

require_once 'app/Helpers/app.php';

require_once __DIR__ . '/vendor/autoload.php';

use App\Core;

$text = new Core;

dd($text);

// spl_autoload_register(function($class) {
//     $path = str_replace('\\', '/', $class.'.php');
//     if (file_exists($path)) {
//         require $path;
//     }
// });
