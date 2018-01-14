<?php

// enable debug
ini_set('display_errors', 'on');
error_reporting(E_ALL);

define('USE_HTACCESS', false);

define('DATABASE', [
	'host' => 'localhost',
	'user' => 'exp',
	'name' => 'mpespanel',
	'password' => 'postgres',
	'driver' => 'pgsql',
	'port' => 5432
]);