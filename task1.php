#!/usr/bin/env php
<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\FirstCommand;
use Symfony\Component\Console\Application;

$app = new Application('Test task 1', 'v1.0.0');
$app->add(new FirstCommand());
try {
    $app->run();
} catch (Exception $e) {
}
