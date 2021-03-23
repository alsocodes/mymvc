<?php
define('BASEPATH',TRUE);

require './app/autoload.php';
require './vendor/autoload.php';

$app = new \app\App;
$app->run();