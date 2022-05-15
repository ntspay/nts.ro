<?php

define('APP_START', microtime(true));
define('RESOURCES', dirname(__FILE__, 2).'/resources');
define('STORAGE', dirname(__FILE__, 2).'/storage');

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/
require __DIR__.'/../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader(RESOURCES.'/views/');

$twig = new Environment($loader,
  [
    'cache' => STORAGE.'/cache/',
    'debug' => true
  ]
);