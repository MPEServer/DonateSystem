<?php
/**
 * | -----------------------------
 * | Created by expexes on 29.11.17/22:59.
 * | Site: teslex.tech
 * | ------------------------------
 * | bootstrap.php
 * | ---
 */

session_start();

use Solovey\Routing\Router;

require "utils.php";

// Load Solovey
spl_autoload_register(function ($class) {
	$path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
	if (is_file($path)) {
		require $path;
	}
});

// Use .htaccess???
if (startsWith($_SERVER['REQUEST_URI'], '/public')) {
	header("Content-type: " . get_mime_type($_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI']));
	readfile($_SERVER['SCRIPT_FILENAME']);

	return false;
}

// Have access??
if (startsWith($_SERVER['REQUEST_URI'], '/app/') ||
	startsWith($_SERVER['REQUEST_URI'], '/engine/') ||
	startsWith($_SERVER['REQUEST_URI'], '/pages/') ||
	$_SERVER['REQUEST_URI'] === '/app' ||
	$_SERVER['REQUEST_URI'] === '/engine' ||
	$_SERVER['REQUEST_URI'] === '/pages'
) {
	header("HTTP/1.1 403 Forbidden");

	echo "<h1>403</h1><h3>Forbidden</h3>";
	exit();
}

// Load application
require_all($_SERVER['DOCUMENT_ROOT'] . "/app");

// Match route
$route = Router::match($_SERVER['REQUEST_URI'], GET_METHOD());

if (!($route)) {
	if (is_file($_SERVER['DOCUMENT_ROOT'] . '/pages/404.php')) {
		echo file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/pages/404.php');
	} else {
		echo 404;
	}
} else {
	$matches = $route['matches'];
	$query = $route['query'];

	list($class, $action) = explode(':', $route['route']['controller'], 2);

	if ($matches != null) {
		call_user_func_array(array(new $class(), $action), $matches);
	} else {
		call_user_func(array(new $class(), $action));
	}
}