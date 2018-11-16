<?php
require_once ('../core/controller.php');

class MainController extends Controller{
  public function home(){
    $this->view("index");
  }

  public function error_404(){
    $this->view("error_404");
  }
}
?>