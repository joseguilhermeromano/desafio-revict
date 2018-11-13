<?php

if (isset($_GET['controller'])&&isset($_GET['action'])){
    $controller=$_GET['controller'];
    $action=$_GET['action'];
}else{
    $controller='main';
    $action='home';
}


include_once 'views/layout/layout.php';


?>