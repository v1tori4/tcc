<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S.O.S PET | Perfil</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logosospet.png"/>
    <link rel="stylesheet" href="/sospet/view/perfilsospet/styleperfil.css"/>

    <script src="https://kit.fontawesome.com/4d78251818.js" crossorigin="anonymous"></script>
	
</head>
<body background="img/planodefundo.jpg">
	<nav id="menu">
                <ul>
                    <b>S.O.S PET | PERFIL<i class="fas fa-cat"></i></b>
                    <li><a href="index.php?classe=AdocaoController&metodo=abrir_consulta_doacao"> Consultar adoções </a></li>
                    <li><a href="index.php?classe=OngController&metodo=abrir_perfil_ong"> Meu perfil </a></li>
                     <li> <a href="index.php?classe=OngController&metodo=sair_ong" class="btn btn-dark"> Sair</a></li>
                </ul>
        </nav>


        <form action="http://localhost/sospet/index.php?classe=UsuarioController&metodo=upload" method="POST" enctype="multipart/form-data">
       		<button type="button" class="botao" style="font-size:15px;" onclick="document.getElementById('file').click()">Escolha uma foto</button>
       		<input id="file" type="file" name="arquivo" style="display: none"></input>
       		<button type="submit" class="botao" style="font-size:15px;">Salvar</button>
        </form>

        
</body>
</html>