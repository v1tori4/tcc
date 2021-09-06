<?php
class PetAdocao
{
    //atributos 
    private $codigo_doacao_ong;
    private $nome_pet;
    private $estado;
    private $cidade;
    private $observacoes;
    private $fk_codigo_ong;
    private $imagem1;
    private $imagem2;
    private $imagem3; 
 

    //get e set 
    function __get($atributo) { return $this->$atributo; }
    function __set($atributo, $valor) { $this->$atributo = $valor; }


    //Atributo = banco de dados / valor = inserido pelo usuário

    function __construct() //será executado automaticamente ao usar esta classe
    {
        include_once "Conexao.php"; //incluindo classe de conexão
    }


    //método cadastrar
    function cadastrar_adocao()
    {  
        $con = Conexao::conectar(); //carregar a conexão
        $cmd = $con->prepare("INSERT INTO adocao_ong
        (nome_pet, observacoes, fk_codigo_ong,imagem1,imagem2,imagem3) 
        VALUES (:nome_pet,:observacoes, :fk_codigo_ong,:imagem1,:imagem2,:imagem3)");

        //enviando valores para os parâmetros
        $cmd->bindParam(":nome_pet",     $this->nome_pet);
        $cmd->bindParam(":observacoes",  $this->observacoes);
        $cmd->bindParam(":fk_codigo_ong", $this->fk_codigo_ong);
        $cmd->bindParam(":imagem1", $this->imagem1);
        $cmd->bindParam(":imagem2", $this->imagem2);
        $cmd->bindParam(":imagem3", $this->imagem3);

        $cmd->execute();//executando o comando
    }

    //método consultar 
    function consultar()
    {
        $con = Conexao::conectar();//iniciar conexão com BD
        $cmd = $con->prepare("Select adocao_ong.nome_pet, adocao_ong.observacoes, adocao_ong.imagem1, adocao_ong.imagem2, adocao_ong.imagem3, ong_doadores.nome_ong, ong_doadores.estado, ong_doadores.cidade, ong_doadores.telefone, ong_doadores.email_ong from adocao_ong inner join ong_doadores on ong_doadores.codigo_ong = adocao_ong.fk_codigo_ong");
        $cmd->execute();
        return $cmd->fetchAll(PDO::FETCH_OBJ); //retorna os dados em forma de matriz
    }

    //método excluir -> revisar quando a tela de login efetuado estiver pronta
    function excluir()
    {
        $con = Conexao::conectar(); //carregar a conexão
        $cmd = $con->prepare("DELETE FROM adocao_ong WHERE codigo_doacao_ong = :codigo_doacao_ong "); //enviando valor para o parâmetro
        $cmd->bindParam(":codigo_doacao_ong", $this->codigo_doacao_ong); //valor do parâmetro
        $cmd->execute(); //executando o comando
    }

    //método atualizar -> revisar quando a tela de login efetuado estiver pronta
    function atualizar()
    {
        $con = Conexao::conectar(); //carregar a conexão
        $cmd = $con->prepare("UPDATE adocao_ong SET
            nome_pet    = :nome_pet,
            observacoes     = :observacoes,
            fk_codigo_ong = :fk_codigo_ong
           

        WHERE codigo_doacao_ong = :codigo_doacao_ong");
        //enviando valores para os parâmetros
        $cmd->bindParam(":nome_pet",    $this->nome_pet);
        $cmd->bindParam(":observacoes",  $this->observacoes);
        $cmd->bindParam(":fk_codigo_ong", $this->fk_codigo_ong);

        $cmd->execute();//executando o comando
    }

    //método retornar
    function retornar()
    {
        $con = Conexao::conectar();//iniciar conexão com BD
        $cmd = $con->prepare("SELECT * FROM adocao_ong
        WHERE codigo_doacao_ong = :codigo_doacao_ong");
        $cmd->bindParam(":cadrastoong", $this->codigo_doacao_ongs); // atenção aqui pois não sabemos oq por no cadrastoong 
        $cmd->execute();
        return $cmd->fetch(PDO::FETCH_OBJ); //retorna os dados em forma de vetor
    }


}
?>