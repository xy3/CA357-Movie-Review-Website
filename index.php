<?php
require_once 'vendor/autoload.php';
require_once 'src/php/functions.inc.php';

$klein = new \Klein\Klein();

$klein->respond('GET', '/', function () {

});

$klein->dispatch();