<?php 
require_once ('flash_messages.php');
require_once ('formvalidation.php');

class Controller {
  var $vars = [];
  var $layout = "layout";

  function set($d){
    $this->vars = array_merge($this->vars, $d);
  }

  function view($filename){
    extract($this->vars);
    ob_start();
    $class = str_replace('Controller', '', get_class($this));
    require(ROOT . "views/" . strtolower($class) . '/' . $filename . '.php');
    $content_for_layout = ob_get_clean();
    if ($this->layout == false){
        $content_for_layout;
    }else{
        require(ROOT . "views/layout/" . $this->layout . '.php');
    }
  }

  function redirect($url, $permanent = false) {
    if($permanent) {
      header('HTTP/1.1 301 Moved Permanently');
    }
    header('Location: '.BASE_URL.$url);
    exit();
  }
}
?>