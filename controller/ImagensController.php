<?php

    class ImagensController
    {

        function abrir_cadastro_imagens()
        {
            include_once "";
        }
        function cadastrar_imagens()
        {
            include "model/Imagens.php";
            $img = new Imagens();

            $img->nome_imagem       = $_POST["nome_imagem"];
            $img->fk_codigo_adocao  = $_POST["fk_codigo_adocao"];

            $img->cadastrar_imagem();

            echo "<script> alert('Imagem cadastrada com sucesso');
            window.location='index.php?classe=&metodo='</script>"
        }

        function consultar_imagem()
        {
            include "model/Imagens.php";
            $img = new Imagens();
            $dados = img->consultar_imagem();
            include_once "";
        }

        function excluir_imagem()
        {
            include_once "model/Imagens.php";
            $img = new Imagens();

            $img->codigo_imagem = $_GET["codigo_imagem"];
            $img->excluir();

            header("location:index.php?classe=&metodo");
        }
    }


?>