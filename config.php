<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| DeMerzli Arena 2.0
|--------------------------------------------------------------------------
*/

define('APP_NAME', 'DeMerzli Arena');
define('APP_VERSION', '2.0.0-alpha');
define('APP_URL', 'http://localhost/arena2');
define('APP_ENV', 'development');

date_default_timezone_set('Europe/Zurich');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/*
|--------------------------------------------------------------------------
| Datenbank
|--------------------------------------------------------------------------
*/

define('DB_HOST', 'localhost');
define('DB_NAME', 'arena2');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

/*
|--------------------------------------------------------------------------
| Twitch
|--------------------------------------------------------------------------
*/

define('TWITCH_CLIENT_ID', '');
define('TWITCH_CLIENT_SECRET', '');
define('TWITCH_REDIRECT_URI', APP_URL . '/callback.php');

/*
|--------------------------------------------------------------------------
| Pfade
|--------------------------------------------------------------------------
*/

define('CSS_PATH', APP_URL . '/assets/css/');
define('JS_PATH', APP_URL . '/assets/js/');
define('IMG_PATH', APP_URL . '/assets/images/');

/*
|--------------------------------------------------------------------------
| Fehlerausgabe
|--------------------------------------------------------------------------
*/

if (APP_ENV === 'development') {
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', '0');
}

/*
|--------------------------------------------------------------------------
| Includes
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/database.php';
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/auth.php';
