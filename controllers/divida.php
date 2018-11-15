<?php
require_once ('../core/controller.php');
require_once ('../models/divida.php');
require_once ('../daos/divida.php');

class DividaController extends Controller{

  private $DividaDAO;

  public function __construct(){
    $this->DividaDAO = new DividaDAO();          
  }

  public function index(){
    $clientes = $this->DividaDAO->getAllDividas();
    $data['dividas'] =$clientes;
    $this->set($data);
    $this->view('index');
  }

  public function search(){
    $clientes= null;
    if(isset($_POST['name'])){
        $clientes = $this->DividaDAO->findByName($_POST['name']);
    }
    $data['dividas'] =$clientes;
    $this->set($data);
    $this->view('index');
  }

  public function register(){

  }

  public function create(){

  }

  public function edit($id){

  }

  public function update($id){

  }

  public function remove($id){

  }

}

?>