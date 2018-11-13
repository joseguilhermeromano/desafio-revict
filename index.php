<?php  

require_once ('/models/cliente.php');
require_once ('/database/cliente_dao.php');
require_once ('/database/database.php');

$db      = new Database();
$dao     = new ClienteDAO($db);

$cliente = new Cliente();
$cliente->setNome("José Guilherme");
$cliente->setSobrenome("Romano");
$cliente->setCpf("000.000.000-00");

$dao->create($cliente); // aqui grava o resultado enviado do form

echo "testando cadastro de clientes...";