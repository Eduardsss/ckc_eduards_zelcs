<?php
// router.php
require_once 'routes.php';

$path = $_SERVER['REQUEST_URI'];

if (array_key_exists($path, $routes)) {
    require_once $routes[$path];
} else {
    echo "404 Not Found";
}
?>