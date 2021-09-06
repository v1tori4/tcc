<?php
class AdocaoController
{
    function abrir_adocao()
    {
    
        //$this->verificar_acesso();
        include_once "model/Ong.php";
        $ong = new Ong();

        $dados_adocao = $ong->consultar();

        include_once "view/adocao/Adocao.php"; // nota importante aqui ele cria um cadastro na view, mudar aqui para o nome que estiver na view sobre o cadrasto de adoção depois, vou por um suposto por enquanto.
    } 

    function cadastrar_adocao()
    {
      
        include "model/PetAdocao.php";
        $usu = new PetAdocao();

        $usu->nome_pet     = $_POST["nome_pet"];
        $usu->observacoes       = $_POST["observacoes"];
        $usu->fk_codigo_ong = $_SESSION["codigo_logado_ong"];
        //verificando a extensão permitida
        $permitidas = array("png","gif","jpeg","jpg");
        
        session_start();
        
        //upload imagem 1
        $usu->imagem1 = "";
        if($_FILES["imagem1"]["error"] == 0)
        {
           
            $info = new SplFileInfo($_FILES["imagem1"]["name"]);
            $extensao = $info->getExtension();
            if(in_array($extensao,$permitidas))
            {
                //fazer upload da imagem
                $nome_arquivo = md5(microtime()).".$extensao";
                $destino = "uploads/$nome_arquivo";
                $nome_temp = $_FILES["imagem1"]["tmp_name"];
                move_uploaded_file($nome_temp,$destino);

                //enviar dados para o BD
                $usu->imagem1      = $nome_arquivo;
            }
        }

        //upload imagem 2
        $usu->imagem2 = "";
        if($_FILES["imagem2"]["error"] == 0)
        {
           
            $info = new SplFileInfo($_FILES["imagem2"]["name"]);
            $extensao = $info->getExtension();
            if(in_array($extensao,$permitidas))
            {
                //fazer upload da imagem
                $nome_arquivo = md5(microtime()).".$extensao";
                $destino = "uploads/$nome_arquivo";
                $nome_temp = $_FILES["imagem2"]["tmp_name"];
                move_uploaded_file($nome_temp,$destino);

                //enviar dados para o BD
                $usu->imagem2      = $nome_arquivo;
            }
        }

        //upload imagem 3
        $usu->imagem3 = "";
        if($_FILES["imagem3"]["error"] == 0)
        {
           
            $info = new SplFileInfo($_FILES["imagem3"]["name"]);
            $extensao = $info->getExtension();
            if(in_array($extensao,$permitidas))
            {
                //fazer upload da imagem
                $nome_arquivo = md5(microtime()).".$extensao";
                $destino = "uploads/$nome_arquivo";
                $nome_temp = $_FILES["imagem3"]["tmp_name"];
                move_uploaded_file($nome_temp,$destino);

                //enviar dados para o BD
                $usu->imagem3      = $nome_arquivo;
            }
        }
    
        $usu->cadastrar_adocao();

        echo "<script>
                alert('a sua adoção foi cadastrada com sucesso!');
                window.location='index.php?classe=AdocaoController&metodo=abrir_adocao';
            </script>";
    }

    function abrir_consulta_doacao()
    {
        $this->verificar_logado();
        include_once "model/PetAdocao.php";
        $usu = new PetAdocao();
        $dados = $usu->consultar();

        include_once "view/consulta_adocao/ConsultaAdocao.php"; //ATENÇÃO AQUI POIS DEVERÁ SER MUDADO QUANDO O A VIEW TER O CONSULTA adocao ;)
    }

    function excluir()
    {
         $this->verificar_logado();
        include_once "model/PetAdocao.php";
        $usu = new PetAdocao();
        $usu->codadoção = $_GET["codadoção"];
        $usu->excluir();
        //direcionar para a página de consulta
        header("Location:index.php?classe=AdocaoController&metodo=abrir_consulta");
    }

    function editar()
    {
        $this->verificar_logado();
        $this->verificar_acesso();
        include_once "model/PetAdocao.php";
        $usu = new PetAdocao();
        $usu->codadoção = $_GET["codadoção"];
        $dados = $usu->retornar();

        //exibir a tela de edição dos dados
        include_once "view/XXXXXX.php";// ATENÇÃO AQUI TBMMM
    }

   
    function atualizar()
    {
        $this->verificar_logado();
        include "model/PetAdocao.php";
        $prod = new PetAdocao();

        $prod->nome_pet          = $_POST["nome_pet"];
        $prod->estado                = $_POST["estado"];
        $prod->cidade            = $_POST["cidade"];
        $prod->descricao            = $_POST["descricao"];
        $prod->fk_codigo_ong          = $_POST["fk_codigo_ong"];

        $prod->atualizar();

        echo "<body></body>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js'></script>
        <script src='//cdn.jsdelivr.net/npm/sweetalert2@10'></script>
        <script>
        Swal.fire({
            title:'Dados gravados com sucesso!',
            type:'success',
            icon:'success',
            showConfirmButton:false,
            timer:2000,
            onClose: () => {
                window.location='index.php?classe=ProdutoController&metodo=abrir_consulta';
            }
        });
        </script>";
    }

    function verificar_logado()
    {
        session_start();
        if(!isset($_SESSION["codigo_usuario_logado"]) && !isset($_SESSION["codigo_ong_logada"]))//não existe a sessão
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