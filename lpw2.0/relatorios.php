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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

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

      <button type="button" class="btn btn-info btn-lg btn-block">Motoboys Cadastrados</button>
      <button type="button" class="btn btn-info btn-lg btn-block">Empresas Cadastradas</button>
      <button type="button" class="btn btn-info btn-lg btn-block">Motoboys mais solicitados</button>
      <button type="button" class="btn btn-info btn-lg btn-block">Motoboys menos solicitados</button>
      <button type="button" class="btn btn-info btn-lg btn-block">Empresas que mais solicitaram entregas</button>
      <button type="button" class="btn btn-info btn-lg btn-block">Empresas que menos solicitaram entregas</button>
      <button type="button" class="btn btn-info btn-lg btn-block">Média de Entregas por Mês</button>

    </div><!-- Fim Bloco de Botões dos Relatórios -->
  </div>


  <footer class=" mt-4 pt-5 pb-5 bg-333333">
    <!-- Início Rodapé -->
    <div class="container">
      <div class="text-center text-light">
        Copyright © 2021 | <span style="color: #ffcc43;">MotoGo</span>
      </div>
    </div>
  </footer><!-- Fim Rodapé -->

  <!-- JavaSript -->
  <script src="jsgeral.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>

  <!-- JavaScript (Opcional) -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>