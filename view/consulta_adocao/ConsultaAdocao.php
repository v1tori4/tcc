<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar adoções | S.O.S Pet </title>

    <!-- Links do Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Fav Icon-->
    <link rel="shortcut icon" href="logosospet.png">

    <!-- Link do CSS-->
    <link rel="stylesheet" href="view/consulta_adocao/consultadocao.css">

    <!-- Link do Font Awesome-->
    <script src="https://kit.fontawesome.com/4d78251818.js" crossorigin="anonymous"></script>
</head>
<body background="img/planodefundo.jpg">
    
<nav id="menu">
                <ul>
                    <b>S.O.S PET <i class="fas fa-cat"></i> </b>
                    <li><a href="index.php?classe=AdocaoController&metodo=abrir_consulta_doacao"> Consultar adoções </a></li>
                    <li><a href="index.php?classe=UsuarioController&metodo=abrir_perfil"> Meu perfil </a></li>
                     <li> <a href="index.php?classe=UsuarioController&metodo=sair_usuario" class="btn btn-dark"> Sair</a></li>
                     
                </ul>
        </nav>

    

            
            <?php
                foreach($dados as $valores)
                {   
                    ?>
                    <center>
                    <div class="card" style="width: 18rem; margin-bottom: 40px; margin-top: 40px; font-size: 20px; color:black;">
                    <b><p class="card-text"><center> <?php echo "Nome da ONG: $valores->nome_ong"; ?></center></p></b>
                   <?php echo "<img src='uploads/$valores->imagem1'></img>"; ?> 
                   <br>
                   <?php echo "<img src='uploads/$valores->imagem2'></img>"; ?>
                   <br>
                   <?php echo "<img src='uploads/$valores->imagem3'></img>"; ?>
                   
                    <div class="card-body" style="font-size: 18px; color:black;">
                        
                        <p class="card-text"><?php echo "Nome do pet: $valores->nome_pet"; ?></p>
                        <p class="card-text"><?php echo "Observações: $valores->observacoes"; ?></p>
                        <p class="card-text"><?php echo "Estado: $valores->estado Cidade: $valores->cidade"; ?></p><hr>
                        <p class="card-text" style="color:#A9A9A9; font-size:15px;"> Informações para contato:<br> <?php echo "Email: $valores->email_ong <br>Telefone: $valores->telefone"; ?> </p>
                        <p class="card-text"><?php echo "Nome da image: $valores->imagem1"; ?></p>
                        
                    </div>
                    </div>
                    </center>
                    
                    <?php
                
                }
            ?>
            
            
            
</body>
</html>