<?php

    include_once("../config.inc.php");

    function cadastraRegistro($x, $y) {
        return $x * $y;
    }

    function listaRegistro($x, $y) {
        return $x * $y;
    }

    function alteraRegistro($x, $y) {
        return $x * $y;
    }

    function excluiRegistro($conexao, $tabela) {

        $id = $_REQUEST['id'];

        $sql = mysqli_query($conexao,"DELETE FROM $tabela WHERE id = $id");
    
        if($sql){
            echo "<h2>Mensagem apagada com sucesso</h2>";
        } else {
            echo "<h2>Falha na exclusão</h2>";
        }
    
        mysqli_close($conexao);
    
    }


?>