<?php 

session_start();
require_once 'dbc.inc.php';


const VIEWS = 'src/views/';
const PARTIALS = 'src/views/partials/';

function show($page)
{
	$nav = PARTIALS . 'navbar.php';
	require_once VIEWS . $page;
}