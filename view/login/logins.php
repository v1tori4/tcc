<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Login ONG</title>
	
	<link rel="stylesheet" type="text/css" href="view/login/stylelogin.css">
	<link rel="shortcut icon" href="logosospet.png">
	<!-- boot -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	 
</head>
<meta charset="utf-8">
<body>
	<br>
	<br>
	<div class="resgistroformulario"><h1>Logar como ONG  &nbsp;<a href="#" class="btn btn-primary"  onClick="history.go(-1)">Sair </h1></a></div>


	<div class="conteudo">
		<form action="index.php?classe=OngController&metodo=logar_ong" method="post">

			<!--<input type="radio" name="opcao" value="ong"> Logar como ONG -->
			<!--<input type="radio" name="opcao" value="usuario"> Logar como Usuário-->
			
			<h2 class="nome">Email:</h2>
			<input class="email" type="text" name="email_ong" placeholder="Digite o seu Email...">

			<h2 class="nome">Senha:</h2>
			<input class="senha" type="password" name="senha_ong" placeholder="Digite a sua Senha...">

			<br>


			<p align="right">
				

  				<input class="botao" type="submit" value="Logar" />
			</p>

		</form>
	</div>

	<style>

@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');

body{
	font-family: 'Quicksand', sans-serif;
}

	</style>

</body>
</html>