<!DOCTYPE html>
<html>
<head>
	<title> Usuário | S.O.S PET </title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	 <script src="https://kit.fontawesome.com/4d78251818.js" crossorigin="anonymous"></script>

	 <!-- link da barrinha lá-->
	 <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- js sem bundle da rafa -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Link do arquivo css-->
    <link rel="stylesheet" href="view/tela_central/central.css" >

    <!-- Fav Icon-->
    <link rel="shortcut icon" href="logosospet.png">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <!-- js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <!-- separate sei la-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


</head>
<body>
<body background="img/planodefundo.jpg">


	<nav id="menu">

		<ul>

            <b>S.O.S PET <i class="fas fa-cat"></i> </b>
             <li><a href="index.php?classe=AdocaoController&metodo=abrir_consulta_doacao"> Adoções  </a></li>
              <li><a href="index.php?classe=UsuarioController&metodo=abrir_perfil"> Meu perfil </a></li>
           <li> <a href="index.php?classe=UsuarioController&metodo=sair_usuario" class="btn btn-primary"  onClick="history.go(-1)">Sair</a></li>
              <!--	<li class='nav'>
  <li class='active'>
  <li>
    <div class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">☰</a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">            
        <li><a href="#">Sair</a></li>
        <li class="divider"></li>
      </li>
      </div>
   			
</ul> -->
   
</ul>
  </nav>

        </ul>
        </nav>
        <br>
        <left>
    <nav class="position"> 
<div class="card" style="width: 20rem; margin-left: 20px;">
        <img class="card-img-top" src="view/tela_central/imgcentral/animacard.png" alt="Imagem de capa do card">
        <div class="card-body" style="align-items: center; position: relative;">
          <center><h5 class="card-title" >Boas vindas!</h5></center>
          <p class="card-text"> <?php echo $_SESSION["nome_usuario_logado"]; ?> Seja Bem Vinde ao S.O.S PET! Edite o seu perfil aqui e olhe inúmeros animais à espera de um lar <3! </p>
          <center><a href="index.php?classe=UsuarioController&metodo=abrir_perfil" class="btn btn-primary">Ver o meu perfil</a></center>

          
        </div>
      </div>

    </left>
        <center>

       <!-- <div class="autoplay">
        	<div><img src="view/tela_central/imgcentral/Anima1.png" height="360" alt="primeiro slide"></div>
        	<div><img src="view/tela_central/imgcentral/Anima2.png" height="360" alt="segund slide" ></div>
        </div> -->


        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="view/tela_central/imgcentral/Anima1.png"  alt="adote0" width="400">
    </div>
    <div class="carousel-item">
      <img src="view/tela_central/imgcentral/anima0.png"  alt="adote1" width="400">
    </div>
    <div class="carousel-item">
      <img src="view/tela_central/imgcentral/Anima2.png"  alt="adote2" width="500">
    </div>
    <div class="carousel-item">
      <img src="view/tela_central/imgcentral/anima3.png"  alt="adote2" width="400">
    </div>
  </div>
</div>
</center>
</nav>
<!--

	
      <div id="demo" class="carousel slide" data-ride="carousel"> 

		 
  	<ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
 	</ul>

 		 
  		<div class="carousel-inner">

    	<div class="carousel-item active">

     	<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="view/tela_central/imgcentral/anima0.png" alt="Los Angeles" width="500" height="500">
    </div>
    <div class="carousel-item">
     <img src="view/tela_central/imgcentral/Anima1.png" alt="Los Angeles" width="500" height="500">
    </div>
    <div class="carousel-item">
      <img src="view/tela_central/imgcentral/Anima2.png" alt="Los Angeles" width="500" height="500">
    </div>
    <div class="carousel-item">
      <img src="view/tela_central/imgcentral/anima3.png" alt="Los Angeles" width="500" height="500">
    </div>
  </div>

 
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> -->

       

        <!-- <ul class="slider">
         	<li>
         		<imput type="radio" id="slide1" name="slide"> 
         			<label for="slide1" ></label>
         			<img src="view/tela_central/imgcentral/Anima1.png" height="360" >
				</imput>
			</li>
			<li>
				<imput type="radio" id="slide1" name="slide"> 
         			<label for="slide1" ></label>
         			<img src="view/tela_central/imgcentral/Anima1.png" height="360" >
				</imput>
			</li>

         </ul> -->

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

</body>
</html>