<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Motoboy - MotoGo</title>

  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Estilo Customizado -->
  <link rel="stylesheet" href="css/estilo.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.png">
</head>

<body>
  <header>
    <?php include 'menu.php' ?>
  </header><!-- Fim Cabeçalho -->

  <div class="mb-5 pt-5 pb-5 bg-dark">
    <!-- Início Título -->
    <div class="container">
      <h2 class="display-4 text-light">Motoboy</h2>
    </div>
  </div><!-- Fim Título -->

  <div class="container">
    <h2 class="display-4" style="font-size: 2.5rem;">Selecione a opção que deseja nesse momento</h2>

    <div class="row mt-5 mb-5">
      <!-- Início Cadastrar e Consultar -->
      <div class="col-md-5 mr-4 p-5 rounded text-center" style="background-color: #EBFDFE;">
        <!-- Início Cadastrar -->
        <div>
          <h3>
            <i style="font-size: 2.5rem;" class="fas fa-user-plus mr-3  "></i>
            Cadastrar
          </h3>
        </div>
        <div class="mt-5">
          <a class="btn btn-info" href="cadastro_motoboy.php"> Cadastrar Motoboy</a>
        </div>
      </div><!-- Fim Cadastrar -->

      <div class="col-md-5 p-5 rounded text-center" style="background-color: #EBFDFE;">
        <!-- Início Consultar -->
        <div>
          <h3>
            <i style="font-size: 2.5rem;" class="fas fa-user-check mr-3  "></i>
            Consultar
          </h3>
        </div>
        <div class="mt-5">
          <a class="btn btn-info" href="consultar_motoboy.php"> Consultar Motoboy</a>
        </div>
      </div><!-- Fim Consultar -->
    </div><!-- Fim Cadastrar e Consultar -->

    <div class="row mt-5 mb-5">
      <!-- Início Atualizar e Remover -->
      <div class="col-md-5 mr-4 p-5 rounded text-center" style="background-color: #EBFDFE;">
        <!-- Início Atualizar -->
        <div>
          <h3>
            <i style="font-size: 2.5rem;" class="fas fa-user-edit mr-3  "></i>
            Atualizar
          </h3>
        </div>
        <div class="mt-5">
          <a class="btn btn-info" href="atualizar_motoboy.php"> Atualizar Motoboy</a>
        </div>
      </div><!-- Fim Atualizar -->

      <div class="col-md-5 p-5 rounded text-center" style="background-color: #EBFDFE;">
        <!-- Início Remover -->
        <div>
          <h3>
            <i style="font-size: 2.5rem;" class="fas fa-user-times mr-3  "></i>
            Remover
          </h3>
        </div>
        <div class="mt-5">
          <a class="btn btn-info" href="remover_motoboy.php"> Remover Motoboy</a>
        </div>
      </div><!-- Fim Remover -->
    </div><!-- Fim Atualizar e Remover -->
  </div>

  <hr>

  <div>
    <!-- Início Bloco Entregas -->
    <div align="center" class="col-lg-12 p-4 ml-auto mt-2">
      <h3> Deseja saber mais sobre as entregas? </h3>
      <p class="mt-2" class="text-center">Clique no botão abaixo!</p>
      <a class="btn btn-info  mt-2" href="entrega.html">Clique aqui</a>
    </div>
  </div><!-- Fim Bloco Entregas -->


  <div>
    <?php include 'footer.php' ?>
  </div>

  <!-- JavaSript -->
  <script src="jsgeral.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>