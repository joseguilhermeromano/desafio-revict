<?php 
class Database {
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $database = "desafiorevict";
  private $conexao = null;

  public function __construct(){          
    $this->conectar();
  }

  public function getConexao(){
    return $this->conexao;
  }

  private function conectar() {
    $this->conexao = new PDO("mysql:host=".$this->host.";dbname=".$this->database, 
                             $this->username, $this->password); 
  }
}
?>