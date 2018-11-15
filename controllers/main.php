<?php
require_once ('../core/controller.php');
require_once ('../models/divida.php');
require_once ('../daos/divida.php');
require_once ('../models/cliente.php');
require_once ('../daos/cliente.php');

class MainController extends Controller{
  public function home(){
    // $dao     = new DividaDAO();
    // $cliente = new Divida();
    // $cliente->setNome("José ");
    // $cliente->setSobrenome("Guilherme");
    // $cliente->setCpf("000.000.000-00");

    // echo print_r($dao->findByName('compra'));
    // SELECT * FROM clientes c INNER JOIN dividas d ON c.id = d.cliente_id where c.id = 91;

    //$dao->insert($cliente); // aqui grava o resultado enviado do form
    // $dao->edit($cliente, 91);
    // $dao->delete(92);
    // include_once('/views/cliente/index.php');

    // $dao     = new DividaDAO();
    // $divida = new Divida();
    // $divida->setNome("Compra de fio ");
    // $divida->setDescricao("Ref ao mês 11/2018");
    // $divida->setValorTotal(500.00);
    // $divida->setDataProcessamento('2018-11-14');
    // $divida->setQtdParcelas(3);
    // $divida->setStatus('Finalizada');
    // $divida->setClienteId(91);
    // $dao->insert($divida);
    // echo $dao->getDivida(5)->getCliente()->getNome();
    //  echo print_r($dao->getAllDividas());
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