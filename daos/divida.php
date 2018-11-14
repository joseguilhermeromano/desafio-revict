<?php
require_once "database.php";

class DividaDAO{

  public function insert(Divida $divida){
    $sql = "INSERT INTO dividas (nome, descricao, valor_total, data_processamento, qtd_parcelas, status)VALUES (:nome, :descricao, :valor_total, :data_processamento, :qtd_parcelas, :status)";
    $stmt = Database::getConexao()->prepare($sql);
    return $stmt->execute([
        'nome' => $divida->getNome(),
        'descricao' => $divida->getDescricao(),
        'valor_total' => $divida->getValorTotal(),
        'data_processamento' => $divida->getDataProcessamento(),
        'qtd_parcelas' => $divida->getQtdParcelas(),
        'status' => $divida->getStatus()
    ]);
  }

  public function getDivida($id){
    $sql = "SELECT * FROM dividas WHERE id =" . $id;
    $stmt = Database::getConexao()->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Divida'); 
    $stmt->execute();
    return $stmt->fetch();
  }

  public function getAllDividas(){
    $sql = "SELECT * FROM dividas";
    $stmt = Database::getConexao()->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Divida'); 
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public function edit(Divida $divida, $id){
    $sql = "UPDATE dividas SET nome = :nome, descricao = :descricao, ".
           "valor_total = :valor_total, data_processamento = :data_processamento, ".
           "qtd_parcelas = :qtd_parcelas, status = :status WHERE id = :id";
    $stmt = Database::getConexao()->prepare($sql);
    return $stmt->execute([
        'id' => $id,
        'nome' => $divida->getNome(),
        'descricao' => $divida->getDescricao(),
        'valor_total' => $divida->getValorTotal(),
        'data_processamento' => $divida->getDataProcessamento(),
        'qtd_parcelas' => $divida->getQtdParcelas(),
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