<?php
require_once "database.php";
require_once "cliente.php";
require_once "../models/cliente.php";

class DividaDAO{

  public function insert(Divida $divida){
    $sql = "INSERT INTO dividas (nome, descricao, valor_total, data_vencimento, ".
           " status, cliente_id)VALUES (:nome, :descricao, :valor_total, ".
           ":data_vencimento, :status, :cliente_id)";
    $stmt = Database::getConexao()->prepare($sql);
    return $stmt->execute([
        'nome' => $divida->getNome(),
        'descricao' => $divida->getDescricao(),
        'valor_total' => $divida->getValorTotal(),
        'data_vencimento' => $divida->getDataVencimento(),
        'status' => $divida->getStatus(),
        'cliente_id' => $divida->getClienteId()
    ]);
  }

  public function getDivida($id){
    $sql = "SELECT * FROM dividas WHERE id =" . $id;
    $stmt = Database::getConexao()->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Divida'); 
    $stmt->execute();
    $divida = $stmt->fetch();
    $cliente = $this->getClienteOfDivida($divida->getClienteId());
    $divida->setCliente($cliente);
    return $divida;
  }

  public function findByName($name){
    $sql = "SELECT * FROM dividas where nome like '%".$name."%'";
    $stmt = Database::getConexao()->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Divida'); 
    $stmt->execute();
    $dividas = $stmt->fetchAll();
    foreach($dividas as $divida){
        $cliente = $this->getClienteOfDivida($divida->getClienteId());
        $divida->setCliente($cliente);
    }
    return $dividas;
  }

  private function getClienteOfDivida($cliente_id){
    $sql = "SELECT * FROM clientes WHERE id =" . $cliente_id;
    $stmt = Database::getConexao()->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Cliente'); 
    $stmt->execute();
    return $stmt->fetch();
  }

  public function getAllDividas(){
    $sql = "SELECT * FROM dividas";
    $stmt = Database::getConexao()->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Divida'); 
    $stmt->execute();
    $dividas = $stmt->fetchAll();
    foreach($dividas as $divida){
        $cliente = $this->getClienteOfDivida($divida->getClienteId());
        $divida->setCliente($cliente);
    }
    return $dividas;
  }

  public function edit(Divida $divida, $id){
    $sql = "UPDATE dividas SET nome = :nome, descricao = :descricao, ".
           "valor_total = :valor_total, data_vencimento = :data_vencimento, ".
           "status = :status WHERE id = :id";
    $stmt = Database::getConexao()->prepare($sql);
    return $stmt->execute([
        'id' => $id,
        'nome' => $divida->getNome(),
        'descricao' => $divida->getDescricao(),
        'valor_total' => $divida->getValorTotal(),
        'data_vencimento' => $divida->getDataVencimento(),
        'status' => $divida->getStatus()
    ]);
  }

  public function delete($id){
    $sql = 'DELETE FROM dividas WHERE id = ?';
    $stmt = Database::getConexao()->prepare($sql);
    return $stmt->execute([$id]);
  }
}

?>