<!DOCTYPE HTML>
<html lang="pt-br">

<head>
  <title>Relatórios - MotoGo</title>
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
      <h2 class="display-4 text-light">Relatórios</h2>
    </div>
  </div><!-- Fim Título -->

  <div class="container">
    <h2 class="display-4" style="font-size: 2.4rem;">Qual relatório deseja gerar?</h2>

    <div class="container row mt-5 ml-auto mr-auto">
      <!-- Início Bloco de Botões dos Relatórios -->

      <a class="btn btn-block btn-info btn-lg mb-3" href="">Motoboys Cadastrados</a>
      <a class="btn btn-block btn-info btn-lg mb-3" href="">Empresas Cadastradas</a>
      <a class="btn btn-block btn-info btn-lg mb-3" href="">Motoboys mais solicitados</a>
      <a class="btn btn-block btn-info btn-lg mb-3" href="">Motoboys menos solicitados</a>
      <a class="btn btn-block btn-info btn-lg mb-3" href="relatorio_empresas_mais_solicitaram_entregas.php">Empresas que mais solicitaram entregas</a>
      <a class="btn btn-block btn-info btn-lg mb-3" href="relatorio_empresas_menos_solicitaram_entregas.php">Empresas que menos solicitaram entrega</a>
      <a class="btn btn-block btn-info btn-lg mb-3" href="relatorio_todas_entregas_feitas_recentes.php">Todas entregas feitas (Recente - Antigo)</a>
      <a class="btn btn-block btn-info btn-lg mb-3" href="relatorio_todas_entregas_feitas_antigas.php">Todas entregas feitas (Antigo - Recente)</a>

    </div><!-- Fim Bloco de Botões dos Relatórios -->
  </div>


  <div>
    <?php include 'footer.php' ?>
  </div>

  <?php include 'js_bootstrap.php' ?>
</body>

</html>