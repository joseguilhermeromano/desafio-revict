<?php
require_once "database.php";

class ClienteDAO{

  public function insert(Cliente $cliente){
    $sql = "INSERT INTO clientes (nome, sobrenome, cpf) ".
           "VALUES (:nome, :sobrenome, :cpf)";
    $stmt = Database::getConexao()->prepare($sql);
    return $stmt->execute([
        'nome' => $cliente->getNome(),
        'sobrenome' => $cliente->getSobrenome(),
        'cpf' => $cliente->getCpf()
    ]);
  }

  public function getCliente($id){
    $sql = "SELECT * FROM clientes WHERE id =" . $id;
    $stmt = Database::getConexao()->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Cliente'); 
    $stmt->execute();
    $cliente = $stmt->fetch();
    $cliente->setDividas($this->getAllDividasOfCliente($id));
    return $cliente;
  }

  public function findByName($name){
    $sql = "SELECT * FROM clientes where nome like '%".$name."%'";
    $stmt = Database::getConexao()->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Cliente'); 
    $stmt->execute();
    $clientes = $stmt->fetchAll();
    foreach($clientes as $cliente){
      $id = $cliente->getId();
      $dividas = $this->getAllDividasOfCliente($id);
      $cliente->setDividas($dividas);
    }
    return $clientes;
  }

  private function getAllDividasOfCliente($id_cliente){
    $sql = "SELECT * FROM dividas WHERE cliente_id =" . $id_cliente;
    $stmt = Database::getConexao()->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Divida'); 
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public function getAllClientes(){
    $sql = "SELECT * FROM clientes";
    $stmt = Database::getConexao()->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Cliente'); 
    $stmt->execute();
    $clientes = $stmt->fetchAll();
    foreach($clientes as $cliente){
      $id = $cliente->getId();
      $dividas = $this->getAllDividasOfCliente($id);
      $cliente->setDividas($dividas);
    }
    return $clientes;
  }

  public function edit(Cliente $cliente, $id){
    $sql = "UPDATE clientes SET nome = :nome, sobrenome = :sobrenome, ".
           "cpf = :cpf WHERE id = :id";
    $stmt = Database::getConexao()->prepare($sql);
    return $stmt->execute([
        'id' => $id,
        'nome' => $cliente->getNome(),
        'sobrenome' => $cliente->getSobrenome(),
        'cpf' => $cliente->getCpf()
    ]);
  }

  public function delete($id){
    $sql = 'DELETE FROM clientes WHERE id = ?';
    $stmt = Database::getConexao()->prepare($sql);
    return $stmt->execute([$id]);
  }
}

?>