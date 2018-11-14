<?php
require_once ('../core/controller.php');
require_once ('../models/cliente.php');
require_once ('../daos/cliente.php');

class MainController extends Controller{
  public function home(){
    $dao     = new ClienteDAO();
    $cliente = new Cliente();
    $cliente->setNome("José ");
    $cliente->setSobrenome("Guilherme");
    $cliente->setCpf("000.000.000-00");

    //  $dao->insert($cliente); // aqui grava o resultado enviado do form
    // $dao->edit($cliente, 91);
    // $dao->delete(92);
    // include_once('/views/cliente/index.php');
    $this->view("index");
  }

  public function error_404(){
    $this->view("error_404");
  }
}
?>