<?php 
define('BASE_URL', "http://localhost/desafiorevict/");

class Request {
  public $url;
  public function __construct(){
    $this->url = $_SERVER["REQUEST_URI"];
  }
}
?>