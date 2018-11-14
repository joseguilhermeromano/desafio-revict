<?php
require_once ('../core/controller.php');
require_once ('../models/divida.php');
require_once ('../daos/divida.php');

class MainController extends Controller{
  public function home(){
    // $dao     = new ClienteDAO();
    // $cliente = new Cliente();
    // $cliente->setNome("José ");
    // $cliente->setSobrenome("Guilherme");
    // $cliente->setCpf("000.000.000-00");

    //$dao->insert($cliente); // aqui grava o resultado enviado do form
    // $dao->edit($cliente, 91);
    // $dao->delete(92);
    // include_once('/views/cliente/index.php');

    $dao     = new DividaDAO();
    $divida = new Divida();
    $divida->setNome("Compra de fio ");
    $divida->setDescricao("Ref ao mês 11/2018");
    $divida->setValorTotal(500.00);
    $divida->setDataProcessamento('2018-11-14');
    $divida->setQtdParcelas(3);
    $divida->setStatus('Finalizada');
    // $dao->insert($divida);
    // $dao->edit($divida, 3);
    //$dao->delete(1);
    // include_once('/views/cliente/index.php');
    $this->view("index");
  }

  public function error_404(){
    $this->view("error_404");
  }
}
?>