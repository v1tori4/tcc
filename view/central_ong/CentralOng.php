<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONGs | SOS PET </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--Fav Icon da página-->
    <link rel="shortcut icon" href="view/central_ong/img/logosospet.png">
    
    <!-- Ícone do gatinho -->
    <script src="https://kit.fontawesome.com/4d78251818.js" crossorigin="anonymous"></script>

    <!-- Arquivo CSS -->
    <link rel="stylesheet" href="view/central_ong/centralong.css" >

     <!-- js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!-- separate -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>



</head>
<body background="view/central_ong/img/sospet.jpeg">

<nav id="menu">

        <ul>

            <b>S.O.S PET <i class="fas fa-cat"></i> </b>
             <li><a href="index.php?classe=AdocaoController&metodo=abrir_adocao" style="padding: 30px;"> Adoções  </a></li>
              <li><a href="" style="padding: 30px;"> Meu perfil </a></li>
        
           <li> <a href="index.php?classe=OngController&metodo=sair_ong" class="btn btn-primary"  onClick="history.go(-1)" >Sair</a></li>


            
        </ul>
</nav>

<div class="position">
<left>
    
<div class="card" style="width: 20rem; margin-left: 20px; margin-top:20px;">
        <img class="card-img-top" src="view/central_ong/img/animais.png" alt="Imagem de capa do card">
        <div class="card-body" style="align-items: center; position: relative;">
          <center><h5 class="card-title" >Boas vindas!</h5></center>
          <p class="card-text"> <?php echo $_SESSION["nome_ong_logada"]; ?>,seja bem vinda ao S.O.S PET! Aproveite para editar o seu perfil e anunciar o seu belo trabalho <3! </p>
         <a href="index.php?classe=OngController&metodo=abrir_perfil_ong"></a>

          
        </div>
      </div>

    </left>
    <center>

       <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="view/tela_central/imgcentral/Anima1.png"  alt="adote0" width="400">
    </div>
    <div class="carousel-item">
      <img src="view/tela_central/imgcentral/anima0.png"  alt="adote1" width="400">
    </div>
    <div class="carousel-item">
      <img src="view/tela_central/imgcentral/Anima2.png"  alt="adote2" width="400">
    </div>
    <div class="carousel-item">
      <img src="view/tela_central/imgcentral/anima3.png"  alt="adote2" width="400">
    </div>
  </div>
</div>
</center>
</div>
    
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

</body>
</html>