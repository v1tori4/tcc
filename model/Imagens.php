<?php

    class Imagens
    {
        private $codigo_imagem; //Chave primária
        private $fk_codigo_adocao; //Chave Estrangeira
        private $nome_imagem;

        function __get($atributo) { return $this->$atributo; }
        function __set($atributo, $valor) { $this->$atributo = $valor; }

        function __construct()
        {
            include_once "Conexao.php";
        }

        function cadastrar_imagem()
        {
            $con = Conexao::conectar();
            $cmd = $con->prepare("INSERT INTO imagens (nome_imagem, fk_codigo_adocao) values (:nome_imagem, :fk_codigo_adocao)");

            $cmd->bindParam(":nome_imagem" , $this->nome_imagem);
            $cmd->bindParam(":fk_codigo_adocao" , $this->fk_codigo_adocao);
            $cmd->execute();
        }

        function consultar_imagem()
        {
            $con = Conexao::conectar();
            $cmd = $con->prepare("SELECT * FROM imagens where fk_codigo_adocao = :fk_codigo_adocao");
            $cmd->execute();
            return $cmd->fetchAll(PDO::FETCH_OBJ);  
        }

        function excluir_imagem()
        {
            $con = Conexao::conectar();
            $cmd = $con->prepare("DELETE FROM imagens where codigo_imagem = :codigo_imagem");
            $cmd->bindParam(":codigo_imagem", $this->codigo_imagem);
            $cmd->execute();
        }
    }



?>