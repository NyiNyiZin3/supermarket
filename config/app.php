<?php
//phpcs:ignore
require dirname(__DIR__) . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$Dotenv = new Dotenv();
$Dotenv->load(dirname(__DIR__) . '/.env');

define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_ROOT', $_ENV['URL']);