<?php

umask(0000);

require_once __DIR__.'/../vendor/autoload.php';

//Debug::enable();
ini_set('display_errors', 0);

$app = require __DIR__.'/../src/app.php';
require __DIR__.'/../config/prod.php';
require __DIR__.'/../src/controllers.php';
$app->run();
