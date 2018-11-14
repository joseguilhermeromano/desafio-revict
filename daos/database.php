<?php 
class Database {
  private static $host = "localhost";
  private static $username = "root";
  private static $password = "";
  private static $database = "desafiorevict";
  private static $conexao = null;

  public function __construct(){          
  }

  public static function getConexao(){
    if (is_null(self::$conexao)){
      self::$conexao = new PDO("mysql:host=".self::$host.";dbname=".self::$database
                               .";charset=utf8", self::$username, self::$password,
                               array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
    return self::$conexao;
  }
  
}
?>