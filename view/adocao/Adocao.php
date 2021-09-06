<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoções | S.O.S Pet</title>

    <!--Links do Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Fav Icon-->
    <link rel="shortcut icon" href="logosospet.png">

    <!-- Link do CSS-->
    <link rel="stylesheet" href="view/adocao/adocao.css"/>

    <!-- Ícones do Font Awesome-->
    <script src="https://kit.fontawesome.com/4d78251818.js" crossorigin="anonymous"></script>
</head>

      <body background="img/planodefundo.jpg">
    
        <nav id="menu">
                <ul>
                    <b>S.O.S PET <i class="fas fa-cat"></i> </b>
                    <li><a href="index.php?classe=AdocaoController&metodo=abrir_adocao"> Anunciar adoções </a></li>
                    <li><a href=""> Meu perfil </a></li>
                     <li> <a href="#" class="btn btn-primary"  onClick="history.go(-1)" >Sair</a></li>
                </ul>
        </nav>



        <div class="card mb-3 mx-auto" style="max-width: 540px; margin-top: 30px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/adocao.png" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title" style="color: black; font-size: 20px;">Adoções | S.O.S Pet </h5>
                <p class="card-text" style="color: black; font-size: 20px;">Seja bem vindo à seção de Adoção e Doações da S.O.S Pet. Aqui, você pode anunciar e olhar animais para adoção. Aproveite!</p>
                <p class="card-text"><small class="text-muted"></small></p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Quero anunciar uma doação.
                </button>

                <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel" style="color:black; font-size:20px;"> Formulário de Doações <i class="fas fa-paw"></i></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                                    <div class="modal-body" style="color:black; font-size:20px;">
                                        <form action="index.php?classe=AdocaoController&metodo=cadastrar_adocao" method="post" enctype="multipart/form-data">
                                          <div class="form-group">
                                            <label>Nome do Pet</label>
                                            <input type="text" name="nome_pet" class="form-control" value="" placeholder="Nome do Pet">
                                          </div>
                                          <div class="form-group">
                                            <label>Observações</label>
                                            <textarea name="observacoes" class="form-control" cols="20" rows="10" placeholder="Informações extras sobre o bichinho..."></textarea>
                                          </div>
                                          <div class="form-group">
                                            <label>Imagens</label>
                                            <input type="file" name="imagem1" accept="image/*">
                                            <input type="file" name="imagem2" accept="image/*">
                                            <input type="file" name="imagem3" accept="image/*">
                                          </div>
                                          <div class="form-group">
                                            <label>ONG</label>
                                            <select name="fk_codigo_ong" class="form-control">
                                                <?php
                                                  foreach($dados_adocao as $value)
                                                  {
                                                      echo "<option value='$value->codigo_ong'>$value->nome_ong</option>";
                                                  }
                                                ?>
                                            </select>


                                         



                                          </div>
                                    </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Salvar </button>

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
  <center>
  <button type="button" class="btn btn-success" style="width: 40%; background-color: #4B0082; border-color: #4B0082; color: white;"><a href="index.php?classe=AdocaoController&metodo=abrir_consulta_doacao"> Quero ver todas as adoções </button></a>
  </center>
  
</body>
</html>