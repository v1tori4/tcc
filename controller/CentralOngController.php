<?php

    class CentralOngController{

        function abrir_central_ong(){
            $this->verificar_logado();
            include_once "view/central_ong/CentralOng.php";
        }

        function verificar_logado()
    {
        session_start();
        if(!isset($_SESSION["codigo_ong_logada"]))//não existe a sessão
        {
            //voltar para o login
            header("location:index.php?classe=OngController&metodo=abrir_login_ong");
        }
    }

    }

?>