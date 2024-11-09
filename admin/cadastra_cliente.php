<?php

// arquivo que serve para inserir um novo cliente na tabela cliente no banco de dados

include_once("../config.inc.php");  //todo arquivo que vai se conectar com o banco tem que receber esse include

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];


$sql = "INSERT INTO cliente
(nome, email, telefone, cidade, estado) VALUES
('$nome', '$email', '$telefone', '$cidade', '$estado')";

$query = mysqli_query($conexao, $sql);

if ($query){
    echo "<h2>Cliente cadastrado com sucesso.</h2>";
}

mysqli_close($conexao);

?>