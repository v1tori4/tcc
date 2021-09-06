<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desaparecidos | S.O.S Pet</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logosospet.png"/>
    <link rel="stylesheet" href="view/desaparecido/desap.css"/> <!-- acho que não precisa criar um css só pra essa página se ela é praticamente um espelho da adoção --> 

    <script src="https://kit.fontawesome.com/4d78251818.js" crossorigin="anonymous"></script>
</head>
<body background="img/planodefundo.jpg">
    


        <nav id="menu">
                <ul>
                    <b>S.O.S PET <i class="fas fa-cat"></i> </b>
                    <li><a href="index.php?classe=DesaparecidoController&metodo=abrir_desaparecido"> Desaparecidos </a></li>
                    <li><a href="index.php?classe=AdocaoController&metodo=abrir_adocao"> Anunciar adoções </a></li>
                    <li><a href=""> Meu perfil </a></li>
                    <li><a href="#" class="btn btn-primary"  onClick="history.go(-1)">Sair</a></li>
                    
                </ul>
        </nav>


        <center>
    <div class="card mb-3" style="max-width: 540px; margin-top: 30px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="img/desaparecido.png" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title" style="color: black; font-size: 20px;">Desaparecidos | S.O.S Pet </h5>
            <p class="card-text" style="color: black; font-size: 20px;">Seja bem vindo à seção de Desaparecimento da S.O.S Pet. Aqui, você pode comunicar e olhar animais que precisam da sua ajuda. Aproveite!</p>
            <p class="card-text"><small class="text-muted"></small></p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Quero anunciar um desaparecimento.
            </button>

            <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel" style="color:black; font-size:20px;"> Formulário de desaparecimento <i class="fas fa-paw"></i></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                                <div class="modal-body" style="color:black; font-size:20px;">
                                    <form action="" method="post">
                                        
                                        <input type="text" name="nome_pet_desaparecido" value="" placeholder="Nome do Pet desaparecido ">
                                        <br>
                                        <br>

                                        <input type="text" name="estado" placeholder="Estado">
                                        <br>
                                        <br>

                                        <input type="text" name="cidade" placeholder="Cidade">
                                        <br>
                                        <br>
                                        <textarea name="observacoes" id="" cols="20" rows="10" placeholder="Informações extras sobre o bichinho..."></textarea>
                                        <br>
                                        <br>
                                        <input type="submit" class="btn btn-primary" value="Adicionar Imagem"><i class="fas fa-camera" style="margin-left: 10px;"></i></input>
                                </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Salvar</button>

                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
          </div>
        </div>
      </div>
    </div>
  </center>
</body>
</html>