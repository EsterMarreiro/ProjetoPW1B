<?php

    // arquivo que serve para excluir uma mensagem, e consequentemente um contato, da tabela contatos do banco de dados
    
    include_once("../config.inc.php");

    $id = $_REQUEST['id'];

    $sql = mysqli_query($conexao,"DELETE FROM contatos WHERE id = $id");

    if($sql){
        echo "<h2>Mensagem apagada com sucesso</h2>";
    } else {
        echo "<h2>Falha na exclusão</h2>";
    }

    mysqli_close($conexao);

?>