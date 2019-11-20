<?php 

session_start();
require_once 'dbc.inc.php';


const VIEWS = 'src/views/';

function show($page)
{
	require_once VIEWS . $page;
}