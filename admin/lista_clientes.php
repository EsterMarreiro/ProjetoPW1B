<h2>Clientes</h2>

<p><a href="?pg=form_cliente">Cadastrar novo cliente</a></p>

<?php


    include_once("../config.inc.php");

    $sql = mysqli_query($conexao,"SELECT * FROM cliente");

    while($tabela = mysqli_fetch_array($sql)){
        echo "Nome: $tabela[nome] <br>";
        echo "E-mail: $tabela[email] <br>";
        echo "Telefone: $tabela[telefone] <br>";
        echo "Cidade: $tabela[cidade] <br>";
        echo "Estado: $tabela[estado] <br>";
        echo "<a href=?pg=exclui_cliente&id=$tabela[id]><b>[X] Excluir</b></a>  |";
        echo "<a href=?pg=form_altera_cliente&id=$tabela[id]><b>[V] Alterar</b></a> <br>";
        echo "<hr>";
    }

    if(!$sql){
        echo "<h2>Não foi possível realizar as operações</h2>";
    }

    mysqli_close($conexao);

?>