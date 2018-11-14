<?php
define('PUBLIC_HTML', str_replace("public_html/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("public_html/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

require(ROOT.'router.php');
require(ROOT.'request.php');
require(ROOT.'dispatcher.php');

$dispatcher = new Dispatcher();
$dispatcher->dispatch();


// $application_url = "localhost/desafiorevict/";
// $url = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// $uri_path = str_replace($application_url, "", $url);
// $segments = !empty($uri_path) ? explode('/', $uri_path) : null;
// echo print_r($segments);

// if (isset($segments) && sizeof($segments) >= 2){
//     $controller= $segments[0];
//     $action=$segments[1];
// }else{
//     $controller='main';
//     $action='home';
// }


// include_once 'views/layout/layout.php';


?>