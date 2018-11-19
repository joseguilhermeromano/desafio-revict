<?php
require_once ('../core/controller.php');
require_once ('../models/divida.php');
require_once ('../daos/divida.php');
require_once ('../daos/cliente.php');

class DividaController extends Controller{

  private $DividaDAO;
  private $ClienteDAO;

  public function __construct(){
    $this->DividaDAO = new DividaDAO(); 
    $this->ClienteDAO = new ClienteDAO();          
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
    $data['clientes'] = $this->ClienteDAO->getAllClientes();
    $this->set($data);
    $this->view('register');
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