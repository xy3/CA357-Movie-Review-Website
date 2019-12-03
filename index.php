<?php
require_once 'vendor/autoload.php';
require_once 'src/php/functions.inc.php';



$router = new \Klein\Klein();

$router->respond('GET', '/', function () {
	show('home');
});

$router->respond('GET', '/[:page]', function ($request) {
	return show($request->page);
});


$router->dispatch();

