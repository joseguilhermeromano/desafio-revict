<?php 
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
}
?>