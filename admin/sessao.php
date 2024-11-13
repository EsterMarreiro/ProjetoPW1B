<?php


    function logado() {
        session_start();    //existe o session destroy que faz o logout, encerra a sessao
        return isset($_SESSION['user_id']);
    }

?>
