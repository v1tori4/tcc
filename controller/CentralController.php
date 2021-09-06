<?php

    //Controla as funcionalidades da Página Home, como os Links

    class CentralController{
        
        function abrir_central()
        {   
            $this->verificar_logado_usuario();
            include_once "view/tela_central/central.php";
            //esse trecho acima coloca a Home como página inicial

            
        }

        function verificar_logado_usuario()
    {
        session_start();
        if(!isset($_SESSION["codigo_usuario_logado"]))//não existe a sessão
        {
            //voltar para o login
            header("location:index.php?classe=HomeController&metodo=abrir_home");
        }
    }
    }



?>