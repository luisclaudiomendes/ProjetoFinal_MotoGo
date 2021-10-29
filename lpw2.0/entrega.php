<!DOCTYPE html>
<html lang="pt-br">
<!-- teste -->

<head>
  <title>MotoGo</title>

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
      <h2 class="display-4 text-light">Entrega</h2>
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
          <a class="btn btn-info" href="cadastro_entrega.php"> Cadastrar Entrega</a>
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
          <a class="btn btn-info" href="consultar_entrega.php"> Consultar Entrega</a>
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
          <a class="btn btn-info" href="atualizar_entrega.php"> Atualizar Entrega</a>
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
          <a class="btn btn-info" href="remover_entrega.php"> Remover Entrega</a>
        </div>
      </div><!-- Fim Remover -->
    </div><!-- Fim Atualizar e Remover -->
  </div>

  <div>
    <?php include 'footer.php' ?>
  </div>

  <?php include 'js_bootstrap.php' ?>
</body>

</html>