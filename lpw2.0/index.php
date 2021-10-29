<!DOCTYPE HTML>
<html lang="pt-br">

<head>
  <title>Página Inicial - MotoGo</title>
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

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- Início Carousel -->
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/imagem1.png" alt="Primeiro Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/imagem2.png" alt="Segundo Slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/imagem3.png" alt="Terceiro Slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div><!-- Fim Carousel -->

  <div class="container-fluid row mt-5 ml-auto mr-auto">
    <div class="col-lg-4 p-5 mr-auto mt-2" style="background-color: #EBFDFE;">
      <!-- Início Bloco Motoboy -->
      <div class="text-center">
        <h3> Você é um Motoboy? </h3>
        <p class="mt-4">Cadastre-se abaixo e seja parte da MotoGo!</p>
        <a class="btn btn-info  mt-3" href="cadastro_motoboy.php">Cadastre-se Aqui</a>
      </div>
    </div><!-- Fim Bloco Motoboy -->
    <div class="col-lg-3 p-5 mt-2" style="background-color: #EBFDFE;">
      <!-- Início Bloco Solicitar Pedido -->
      <div class="text-center">
        <h3>Deseja solicitar uma entrega? </h3>
        <p class="mt-3">Faça o pedido abaixo:</p>
        <a class="btn btn-info  mt-3" href="entrega.html">Solicitar Entrega</a>
      </div>
    </div><!-- Fim Bloco Solicitar Pedido -->
    <div class="col-lg-4 p-5 ml-auto mt-2" style="background-color: #EBFDFE;">
      <!-- Início Bloco Empresa -->
      <div class="text-center">
        <h3>Você é uma empresa? </h3>
        <p class="mt-4">Cadastre-se abaixo!</p>
        <a class="btn btn-info mt-3" href="cadastro_empresa.php">Cadastrar Empresa</a>
      </div>
    </div><!-- Fim Bloco Empresa -->
  </div>

  <br>
  <hr>

  <div>
    <!-- Início Bloco para o Quem Somos -->
    <div align="center" class="col-lg-12 p-4 ml-auto mt-2" class="text-center">
      <h3> Quem somos? </h3>
      <p class="mt-2" class="text-center">Clique abaixo e conheça um pouco sobre os criadores da MotoGo!</p>
      <a class="btn btn-info  mt-2" href="quem_somos.html">Clique aqui</a>
    </div>
  </div><!-- Fim Bloco para o Quem Somos -->

  <div>
    <?php include 'footer.php' ?>
  </div>

  <!-- JavaSript -->
  <script src="jsgeral.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<!-- testando alteração-->