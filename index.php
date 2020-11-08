<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once "vendor/autoload.php";
require_once "Helpers/Session.php";
spl_autoload_register(function ($class){
    $folder = "Helpers";
    if (strpos($class, "Model") !== false) {
        $folder = "Models";
    } else if (strpos($class, "Controller") !== false) {
        $folder = "Controllers";
    }
    $filePath = "$folder/$class.php";
    if (!file_exists($filePath)) {
        die("404 Not Found");
    }

    require_once $filePath;
});
Session::getSession();
$requestURI = ltrim($_SERVER['REQUEST_URI']);
$parts = explode('/', $requestURI);
array_shift($parts);

$class = empty($parts[0]) ? 'auth' : $parts[0];
$method = $parts[1] ?? 'index';
$parameter = $parts[2] ?? null;

$controller = ucfirst($class) . 'Controller';
$object = new $controller();
if(method_exists($object, $method)){
    echo $object->$method();
} else {
    die("Not found");
}


