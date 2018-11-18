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
    $this->view('register');
  }

  public function create(){
    $cliente = new Cliente();
    $cliente->setNome($_POST['nome']);
    $cliente->setSobrenome($_POST['sobrenome']);
    $cliente->setCpf($_POST['cpf']);
    $cpf = $cliente->getCpf();
    if($this->clienteDAO->insert($cliente) 
       && FormValidation::valida_cliente()){
      flash('message', 'O Cliente foi cadastrado com sucesso!');
      $this->index();
    }else{
      flash( 'message', 'Não foi possível cadastrar o cliente!', 'alert alert-danger');
      $data['cliente'] = $cliente;
      $this->set($data);
      $this->view('register');
    }
  }

  public function edit($id){
    $cliente = $this->clienteDAO->getCliente($id);
    $data['cliente'] = $cliente;
    $data['id_cliente'] = $id;
    $this->set($data);
    $this->view('edit');
  }

  public function update($id){
    $cliente = $this->clienteDAO->getCliente($id);
    $cliente->setNome($_POST['nome']);
    $cliente->setSobrenome($_POST['sobrenome']);
    $cliente->setCpf($_POST['cpf']);
    $cpf = $cliente->getCpf();
    if($this->clienteDAO->edit($cliente, $id) && 
        FormValidation::valid_cpf($cpf)==true){
      flash('message', 'O Cliente foi atualizado com sucesso!');
      $this->index();
    }else{
      flash( 'message', 'Não foi possível atualizar os dados do cliente!', 
      'alert alert-danger');
      $data['cliente'] = $cliente;
      $this->set($data);
      $this->view('edit');
    }
  }

  public function remove($id){
    if(!empty($id) && $this->clienteDAO->delete($id)){
      flash( 'message', 'O Cliente foi removido com sucesso!');
    }else{
      flash( 'message', 'Não foi possível remover os dados do cliente!', 
      'alert alert-danger');
    }
    $this->index();
  }

}

?>