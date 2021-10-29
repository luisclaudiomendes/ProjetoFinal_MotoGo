<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Cadastro de Motoboy - MotoGo</title>

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
      <h2 class="display-4 text-light">Cadastro do Motoboy</h2>
    </div>
  </div><!-- Fim Título -->

  <form class="container form-group" method="POST" action="php/motoboy/cadastro_motoboy.php">
    <!-- Início Formulário Motoboy -->
    <div class="row ">
      <div class="col-lg-6 mt-2">
        <label>Nome Completo</label>
        <input class="form-control" type="text" name="nome" id="nome">
      </div>
      <div class="col-lg-6 mt-2">
        <label>CPF</label>
        <input class="form-control" type="text" name="cpf" id="cpf">
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 mt-2">
        <label>CNH</label>
        <input class="form-control" type="text" name="cnh" id="cnh">
      </div>
      <div class="col-lg-6 mt-2">
        <label>Telefone</label>
        <input class="form-control" type="text" name="telefone" id="telefone">
      </div>
    </div>

    <div class="mt-2">
      <label>Email</label>
      <input class="form-control" type="email" name="email" id="email">
    </div>

    <div class="mt-2">
      <label>Endereço</label>
      <input class="form-control" type="text" name="endereco" id="endereco">
    </div>

    <!-- 
            <div>
                <label>Disponibilidade</label>
                <input type="text" name="disponibilidade" id="disponibilidade">
            </div>

            <div>
                <label>Foto</label>
                <input type="image" name="foto" id="foto">
            </div> 
            -->

    <div class="mt-2">
      <label>Placa da moto</label>
      <input class="form-control" type="text" name="placa" id="placa">
    </div>

    <div class="mt-2">
      <label>Cor da moto</label>
      <input class="form-control" type="text" name="cor" id="cor">
    </div>

    <button class="btn btn-info mb-5 mt-5" type="submit">Cadastrar</button>
  </form><!-- Fim Formulário Motoboy -->

  <div>
    <?php include 'footer.php' ?>
  </div>

  <?php include 'js_bootstrap.php' ?>
</body>

</html>