<?php
require_once 'vendor/autoload.php';
require_once 'src/php/functions.inc.php';


$base  = dirname($_SERVER['PHP_SELF']);

// Update request when we have a subdirectory    
if(ltrim($base, '/')){ 
    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}

// Dispatch as always
$router = new \Klein\Klein();


$router->respond('GET', '/', function () {
	show('home.php');
});

$router->respond('GET', '/user', function () {
	show('user.php');
});

$router->respond('GET', '/movie/[i:id]', function () {
	show('movie.php');
});

$router->respond('GET', '/review', function () {
	show('review.php');
});

$router->dispatch();

