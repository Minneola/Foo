<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Minneola\TestFoo\Core\Application(realpath(__DIR__.'/../'));
$app->boot();


echo Cain::call();

