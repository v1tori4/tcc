<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>S.O.S PET | HOME</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <!-- ícone do gatinho-->
    <script src="https://kit.fontawesome.com/4d78251818.js" crossorigin="anonymous"></script>

    <!-- Link do arquivo css-->
    <link rel="stylesheet" href="view/main.css" >

    <!-- Fav Icon-->
    <link rel="shortcut icon" href="logosospet.png">


</head>
<body background="img/planodefundo.jpg">

    <nav id="menu">
        <ul>
        
            <b>S.O.S PET <i class="fas fa-cat"></i> </b>
            <li><a href="index.php?classe=FaqController&metodo=abrir_faq"> FAQ S.O.S Pet</a></li>
            <li><a href="index.php?classe=HomeController&metodo=abrir_direcionamento"> Já tem cadastro?</a></li>
            
        </ul>

            
    </nav>
    

    <h2 style="margin-top: 100px;"> Bem-Vindo!</h2>

    <div id="a">
        <h3>Faça seu Cadastro aqui!</h3>

        <a href="index.php?classe=UsuarioController&metodo=abrir_cadastro"> <button class="botao" style="font-size:15px;"> Cadastrar-se como Usuário </button></a>

        <a href="index.php?classe=OngController&metodo=abrir_cadastro"><button class="botao" style="font-size:15px;"> Cadastrar-se como ONG ou Doador</button></a>
        
    </div>

    



    
</body>
</html>