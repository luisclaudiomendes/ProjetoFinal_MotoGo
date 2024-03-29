<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Cadastro de Empresas - MotoGo</title>

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
      <h2 class="display-4 text-light">Cadastro de Empresas</h2>
    </div>
  </div><!-- Fim Título -->

  <form class="container mb-5 form-group" method="POST" action="php/empresa/cadastro_empresa.php">
    <!-- Início Formulário Empresas -->
    <div class="mt-2">
      <label>Nome da empresa</label>
      <input class="form-control" type="text" name="nome" id="nome1">
    </div>

    <div class="mt-2">
      <label>Endereço</label>
      <input class="form-control" type="text" name="endereco" id="endereco1">
    </div>

    <div class="row">
      <div class="col-lg-6 mt-2">
        <label>Telefone</label>
        <input class="form-control" type="text" name="telefone" id="telefone1">
      </div>
      <div class="col-lg-6 mt-2">
        <label>CNPJ</label>
        <input class="form-control" type="text" name="cnpj" id="cnpj1">
      </div>
    </div>

    <div class="mt-2">
      <label>Descrição</label>
      <textarea rows="5" cols="30" class="form-control" name="descricao" id="descricao1"></textarea>
    </div>

    <button class="btn btn-info mt-5 mb-4" type="submit">Cadastrar</button>
  </form><!-- Fim Formulário Empresas -->

  <div>
    <?php include 'footer.php' ?>
  </div>

  <?php include 'js_bootstrap.php' ?>
</body>

</html>