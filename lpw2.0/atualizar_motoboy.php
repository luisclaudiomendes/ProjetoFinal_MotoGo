<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Atualizar Motoboy - MotoGo</title>

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
    <!-- Início Cabeçalho -->
    <nav class="navbar navbar-expand-sm navbar-light pt-4 pb-4">
      <div class="container">

        <a href="index.html" class="navbar-brand d-flex align-items-end">
          <!-- Início Logo -->
          <h1 class=" d-flex align-items-end mr-2" style="color: #036970;">
            <span class="mr-2">MotoGo</span>
            <img style="width: 60px;" src="img/logo.png" alt="">
          </h1>
        </a><!-- Fim Logo -->

        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
          <!-- Início Botão Menu -->
          <span class="navbar-toggler-icon"></span>
        </button><!-- Fim Botão Menu -->

        <div class="collapse navbar-collapse" id="nav-principal">
          <!-- Início Itens Menu -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-3">
              <a class="nav-link " href="index.html">Página Inicial</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="empresas.html">Empresas</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link active" href="motoboy.html">Motoboy</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link" href="quem_somos.html">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-info ml-4" href="login.html">Login</a>
            </li>
          </ul>
        </div><!-- Início Itens Menu -->

      </div>
    </nav>
  </header><!-- Fim Cabeçalho -->

  <div class="mb-5 pt-5 pb-5 bg-dark">
    <!-- Início Título -->
    <div class="container">
      <h2 class="display-4 text-light">Atualizar Motoboy</h2>
    </div>
  </div><!-- Fim Título -->

  <form class="container form-group" method="POST" action="#">
    <!-- Início Atualizar Motoboy -->

    <div class="mt-2">
      <label for="motoboyEscolhido" class="form-label"> Escolha qual motoboy deseja atualizar: </label>
      <select class="custom-select" id="motoboyEscolhido" name="motoboyEscolhido">
        <option value="null" selected>-- Selecione um motoboy --</option>
        <?php
        require_once "../model/motoboy.php";
        $motoboys = selecionarTodosMotoboys();
        foreach ($motoboys as $a) {
          echo "<option value = $a->id_motoboy>" . $a->nome_completo . "</option>";
        }

        ?>
      </select><br>
    </div>

    <button type="submit" class="btn btn-info mb-5 mt-5">Selecionar</button>

  </form><!-- Fim Atualizar Motoboy -->

  <?php
  if (isset($_POST["motoboyEscolhido"])) {
    require_once "../model/motoboy.php";
    $motoboy = selecionarMotoboyId($_POST["motoboyEscolhido"]);

  ?>

    <form class="container form-group" method="POST" action="php/motoboy/atualizar_motoboy.php">
      <!-- Início Formulário Motoboy -->

      <div class="row ">
        <div class="col-lg-6 mt-2">
          <input class="form-control" type="hidden" name="idOculto" id="idOculto" value="<?php echo $motoboy->id_motoboy; ?>">
          <label for="nome">Nome Completo</label>
          <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $motoboy->nome_completo; ?>">
        </div>

        <div class="col-lg-6 mt-2">
          <label for="cpf">CPF</label>
          <input class="form-control" type="text" name="cpf" id="cpf" value="<?php echo $motoboy->cpf; ?>">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 mt-2">
          <label for="cnh">CNH</label>
          <input class="form-control" type="text" name="cnh" id="cnh" value="<?php echo $motoboy->cnh; ?>">
        </div>

        <div class="col-lg-6 mt-2">
          <label for="telefone">Telefone</label>
          <input class="form-control" type="text" name="telefone" id="telefone" value="<?php echo $motoboy->telefone; ?>">
        </div>
      </div>

      <div class="mt-2">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email" value="<?php echo $motoboy->email; ?>">
      </div>

      <div class="mt-2">
        <label for="endereco">Endereço</label>
        <input class="form-control" type="text" name="endereco" id="endereco" value="<?php echo $motoboy->endereco; ?>">
      </div>

      <div class="col-lg-6 mt-2">
        <label for="placa">Placa da Moto</label>
        <input class="form-control" type="text" name="placa" id="placa" value="<?php echo $motoboy->placa_da_moto; ?>">
      </div>

      <div class="mt-2">
        <label for="cor">Cor da Moto</label>
        <input class="form-control" type="text" name="cor" id="cor" value="<?php echo $motoboy->cor_da_moto; ?>">
      </div>

      <button class="btn btn-info mb-5 mt-5" type="submit">Atualizar</button>

    </form><!-- Fim Formulário Motoboy -->

  <?php
  }
  ?>

  <footer class="mt-4 pt-5 pb-5 bg-333333">
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

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>