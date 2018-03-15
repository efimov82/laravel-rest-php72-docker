<?php
// File use for Generate Swagger docs

require_once __DIR__.'/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__.'/..');
$dotenv->load();

define('API_HOST', env('API_HOST', 'localhost:8000'));