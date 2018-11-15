<?php
require_once ('../core/controller.php');
require_once ('../models/cliente.php');
require_once ('../daos/cliente.php');

class ClienteController extends Controller{
  private $clienteDAO;

  public function __construct(){
    $this->clienteDAO = new ClienteDAO();          
  }

  public function index(){
    $clientes = $this->clienteDAO->getAllClientes();
    $data['clientes'] =$clientes;
    $this->set($data);
    $this->view('index');
  }

  public function search(){
    $clientes= null;
    if(isset($_POST['name'])){
        $clientes = $this->clienteDAO->findByName($_POST['name']);
    }
    $data['clientes'] =$clientes;
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