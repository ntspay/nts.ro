<?php

// Load our autoloader
require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader($_SERVER['DOCUMENT_ROOT'].'/templates/');

$twig = new Environment($loader);