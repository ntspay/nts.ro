<?php

// Load our autoloader
require_once 'vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader('templates/');

$twig = new Environment($loader,
  [
    'cache' => 'storage/cache/',
    'debug' => true
  ]
);