<?php

// Load our autoloader
require __DIR__.'/../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader('resources/views/');

$twig = new Environment($loader,
  [
    'cache' => 'storage/cache/',
    'debug' => true
  ]
);

// echo __DIR__.'/../vendor/autoload.php';