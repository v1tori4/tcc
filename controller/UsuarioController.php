<?php
class UsuarioController
{

    //Métodos para abrir telas
    function abrir_cadastro()
    {
        include_once "view/cadastro_usuario/CadastroUsuario.php";
    }

    function abrir_login_usuario()
    {
        include_once "view/login_usuario/LoginUsuario.php";
    }

    function abrir_perfil()
    {
        include "view/perfilsospet/perfil.php";
    }


    function cadastrar()
    {
        include "model/Usuario.php";
        $usu = new Usuario();

        $usu->nome_usuario     = $_POST["nome_usuario"];
        $usu->email_usuario     = $_POST["email_usuario"];
        $usu->senha_usuario     = hash("sha256",$_POST["senha_usuario"]); /* é assim mesmo? não entendi essa parada não */
        $usu->cpf       = $_POST["cpf"];
        $usu->telefone  = $_POST["telefone"];
        $usu->cidade    = $_POST["cidade"];
        $usu->estado    = $_POST["estado"];
        $usu->rua       = $_POST["rua"];
        $usu->bairro    = $_POST["bairro"];
        $usu->cep       = $_POST["cep"];
        //$usu->foto       = $_POST["foto"];

        $usu->cadastrar();

        echo "<script>
                alert('o seu cadrasto foi concluido com sucesso!');
                window.location='index.php?classe=UsuarioController&metodo=abrir_cadastro';
            </script>";
    }

    function abrir_consulta()
    {
        $this->verificar_logado();
        $this->verificar_acesso();
        include_once "model/usuario.php";
        $usu = new Usuario();
        $dados = $usu->consultar();

        include_once "view/ConsultaUsuario.php"; //carregar a tela de consulta de usuários
    }

    function excluir()
    {
        $this->verificar_logado();
        
        include_once "model/Usuario.php";
        $usu = new Usuario();
        $usu->codigo_usuario = $_GET["codigo_usuario"];
        $usu->excluir();
        //direcionar para a página de consulta
        header("Location:index.php?classe=UsuarioController&metodo=abrir_consulta");
    }

    function editar()
    {
        $this->verificar_logado();
        $this->verificar_acesso();
        include_once "model/Usuario.php";
        $usu = new Usuario();
        $usu->codusuario = $_GET["codigo_usuario"];
        $dados = $usu->retornar();

        //exibir a tela de edição dos dados
        include_once "view/EditarUsuario.php";
    }

    function atualizar()
    {
        $this->verificar_logado();
        $this->verificar_acesso();
        include "model/Usuario.php";
        $usu = new Usuario();

        $usu->nome              = $_POST["nome"];
        $usu->email_usuario     = $_POST["email_usuario"];
        $usu->senha_usuario     = hash("sha256",$_POST["senha_usuario"]);
        $usu->cpf               = $_POST["cpf"];
        $usu->telefone          = $_POST["telefone"];
        $usu->cidade            = $_POST["cidade"];
        $usu->estado            = $_POST["estado"];
        $usu->codigo_usuario    = $_POST["codigo_usuario"];
        $usu->foto              = $_POST["foto"];

        $usu->atualizar();

        echo "<script>
                alert('Dados alterados com sucesso!');
                window.location='index.php?classe=UsuarioController&metodo=abrir_consulta';
            </script>";
    }

    function upload()
    {
                include "model/Usuario.php";
        $msg = false;

        if (isset($_FILES['arquivo'])) {
            $currentDirectory = getcwd();
            $uploadDirectory = "\\uploads\\";
            $fileTmpName  = $_FILES['arquivo']['tmp_name'];
            $uploadPath = $currentDirectory . $uploadDirectory . basename($_FILES['arquivo']['name']);

            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
              echo "The file  has been uploaded";
            } else {
              echo "An error occurred. Please contact the administrator.";
            }

            $usu = new Usuario();
            $usu->foto = $uploadPath;
            $usu->codigo_usuario = 1;   

            $usu->upload();

      
        } else {
                         echo "<script>
                alert('nenhum arquivo enviado!');
            </script>";
        }
    }

    function abrir_login()
    {
        include_once "view/login_usuario/LoginUsuario.php";
    }

    

    function logar_usuario()
    {
            include_once "model/Usuario.php";
            $usu = new Usuario();
 
            $usu->email_usuario =   addslashes($_POST["email_usuario"]);
            $usu->senha_usuario =   hash("sha256",$_POST["senha_usuario"]);
 
            $dados = $usu->logar_usuario();
            
            if(!empty($dados)) //não está vazio?
            {
                session_start();//iniciar a sessão
                session_regenerate_id(true);//apaga a sessão antiga
                $_SESSION["codigo_usuario_logado"]      = $dados->codigo_usuario; //aqui não seria codigo_usuario?
                $_SESSION["nome_usuario_logado"]        = $dados->nome_usuario;
 
                header("location:index.php?classe=CentralController&metodo=abrir_central");
            }
            else //está vazio
            {
                echo "<script>
                alert('Usuário ou senha inválido!');
                window.location='index.php?classe=UsuarioController&metodo=abrir_login_usuario';
            </script>";
            }
    }

    function sair_usuario()
    {
        session_start();

        unset($_SESSION["codigo_usuario_logado"]); // exclui apenas uma
        include_once "view/Home.php";
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