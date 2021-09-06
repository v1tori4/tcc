<?php
class OngController
{
    //Métodos para abrir tekas
    function abrir_cadastro()
    {
        include_once "view/cadastro_ong/CadastroOng.php";
    }

    function abrir_login_ong(){

        include_once "view/login/logins.php";
    }

    function abrir_perfil_ong(){
        $this->verificar_logado();
        include_once "view/perfil_ong/perfil_ong/php";
    }

    function cadastrar()
    {
        include "model/Ong.php";
        $usu = new Ong();

            $usu->nome_ong  = $_POST["nome_ong"];
            $usu->email_ong = $_POST["email_ong"];
            $usu->senha_ong = hash("sha256",$_POST["senha_ong"]); /* é assim mesmo? não entendi essa parada não */
            $usu->cpf       =   $_POST["cpf"];
            $usu->telefone  =   $_POST["telefone"];
            $usu->cidade    =   $_POST["cidade"];
            $usu->estado    =   $_POST["estado"];
            $usu->rua       =   $_POST["rua"];
            $usu->bairro    =   $_POST["bairro"];
            $usu->cep       =   $_POST["cep"];
            
        $usu->cadastrar();

        echo "<script>
                alert('O seu cadrasto foi concluido com sucesso!');
                window.location='index.php?classe=OngController&metodo=abrir_cadastro';
            </script>";
    }

    function abrir_consulta()
    {
        $this->verificar_logado();
        $this->verificar_acesso();
        include_once "model/ong.php";
        $usu = new Ong();
        $dados = $usu->consultar();

        include_once "view/ConsultaOng.php"; //carregar a tela de consulta de usuários
    }

    function excluir()
    {
        $this->verificar_logado();
        $this->verificar_acesso();
        include_once "model/ong.php";
        $usu = new Ong();
        $usu->codong = $_GET["codong"];
        $usu->excluir();
        //direcionar para a página de consulta
        header("Location:index.php?classe=OngController&metodo=abrir_consulta");
    }

    function editar()
    {
        $this->verificar_logado();
        $this->verificar_acesso();
        include_once "model/Ong.php";
        $usu = new Ong();
        $usu->codong = $_GET["codong"];
        $dados = $usu->retornar();

        //exibir a tela de edição dos dados
        include_once "view/EditarOng.php";
    }

    function atualizar()
    {
        $this->verificar_logado();
        $this->verificar_acesso();
        include "model/Ong.php";
        $usu = new Ong();

        $usu->nome      =   $_POST["nome"];
        $usu->email     =   $_POST["email"];
        $usu->senha     =   hash("sha256",$_POST["senha"]);
        $usu->cpf       =   $_POST["cpf"];
        $usu->telefone  =   $_POST["telefone"];
        $usu->cidade    =   $_POST["cidade"];
        $usu->estado    =   $_POST["estado"];
        $usu->codong    =   $_POST["codong"];

        $usu->atualizar();

        echo "<script>
                alert('Dados alterados com sucesso!');
                window.location='index.php?classe=OngController&metodo=abrir_consulta';
            </script>";
    }

    
    function logar_ong()
    {
            include_once "model/Ong.php";
            $ong = new Ong();
 
            $ong->email_ong =   addslashes($_POST["email_ong"]);
            $ong->senha_ong =   hash("sha256",$_POST["senha_ong"]);
 
            $dados = $ong->logar_ong();
            
            if(!empty($dados)) //não está vazio?
            {
                session_start();//iniciar a sessão
                session_regenerate_id(true);//apaga a sessão antiga
                $_SESSION["codigo_ong_logada"]      = $dados->codigo_ong; 
                $_SESSION["nome_ong_logada"]        = $dados->nome_ong;
 
                header("location:index.php?classe=CentralOngController&metodo=abrir_central_ong");
            }
            else //está vazio
            {
                echo "<script>
                alert('Usuário ou senha inválido!');
                window.location='index.php?classe=OngController&metodo=abrir_login_ong';
            </script>";
            }
    }

    function sair_ong()
    {
        session_start();
        unset($_SESSION["codigo_ong_logada"]); 
        include_once "view/Home.php";
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

    function verificar_acesso()
    {
        if($_SESSION["acesso_logado"] == 2)//não adm
        {
            //voltar para o início
            header("location:index.php?classe=HomeController&metodo=abrir_home");
        }
    }



}
?>