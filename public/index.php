<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Application;

$application = new Application();

header('Content-Type: text/plain; charset=utf-8');
echo $application->greeting();
