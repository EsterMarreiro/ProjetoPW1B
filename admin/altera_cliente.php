<?php

// arquivo que serve para modificar as informações de um cliente já cadastrado

include_once("../config.inc.php");  //todo arquivo que vai se conectar com o banco tem que receber esse include

$id = $_REQUEST['id'];
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];


$sql = "UPDATE cliente SET 
nome = '$nome', email = '$email', telefone = '$telefone', cidade = '$cidade', estado = '$estado' 
WHERE id = $id";

$query = mysqli_query($conexao, $sql);

if ($query){
    echo "<h2>Cliente alterado com sucesso.</h2>";
}

mysqli_close($conexao);

?>