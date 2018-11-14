<?php
require_once ('../core/controller.php');
require_once ('../models/cliente.php');
require_once ('../database/cliente_dao.php');
require_once ('../database/database.php');

class MainController extends Controller{
  public function home(){
    $db      = new Database();
    $dao     = new ClienteDAO($db);

    $cliente = new Cliente();
    $cliente->setNome("José Guilherme");
    $cliente->setSobrenome("Romano");
    $cliente->setCpf("000.000.000-00");

    $dao->create($cliente); // aqui grava o resultado enviado do form
    // include_once('/views/cliente/index.php');
    $this->view("index");
  }

  public function error_404(){
    $this->view("error_404");
  }
}
?>