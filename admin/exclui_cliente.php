<?php

    // arquivo que serve para excluir um cliente cadastrado, da tabela cliente do banco de dados, pelo seu id

    include_once("../config.inc.php");

    $id = $_REQUEST['id'];

    $sql = mysqli_query($conexao,"DELETE FROM cliente WHERE id = $id");

    if($sql){
        echo "<h3>Cleinte excluido com sucesso</h3>";
    } else {
        echo "<h3>Falha na exclusão</h3>";
    }

    mysqli_close($conexao);

?>