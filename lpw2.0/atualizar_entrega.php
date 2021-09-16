<!DOCTYPE html>
<html lang="pt-br">

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
              <a class="nav-link" href="motoboy.html">Motoboy</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link active" href="quem_somos.html">Quem Somos</a>
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
      <h2 class="display-4 text-light">Atualização das Entregas</h2>
    </div>
  </div><!-- Fim Título -->

  <form class="container form-group" method="POST" action="#"><!-- Início Atualizar Motoboy -->

    <div class="mt-2">
      <label for="entregaEscolhida" class="form-label"> Escolha qual entrega deseja atualizar: </label>
      <select class="custom-select" id="entregaEscolhida" name="entregaEscolhida">
        <option value="null" selected>-- Selecione uma entrega --</option>
        <?php
        require_once "../model/entrega.php";
        $entrega = selecionarTodasEntregas();
        foreach ($entrega as $e) {
          echo "<option value = $e->id> Motoboy: " . $e->nome_motoboy . "; Empresa: " . $e->nome_empresa . "</option>";
        }

        ?>
      </select><br>
    </div>

    <button type="submit" class="btn btn-info mb-5 mt-5">Selecionar</button>

  </form><!-- Fim Atualizar Motoboy -->

  <?php
  if (isset($_POST["motoboyEscolhido"])) {
    require_once "../model/entrega.php";
    $entrega = selecionarEntregaId($_POST["entregaEscolhida"]);

  ?>

    <form class="container form-group" method="POST" action="php/entrega/atualizar_motoboy.php">
      <!-- Início Formulário Motoboy -->

      <div class="row ">
        <div class="mt-2">
          <label>Nome da empresa</label>
          <input class="form-control" type="text" name="empresa" id="empresa" value="<?php echo $entrega->nome_empresa ?>">
        </div>

        <div class="mt-2">
          <label>Nome do motoboy</label>
          <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $entrega->nome_motoboy ?>">
        </div>

        <div class="mt-2">
          <label>Nome do produto</label>
          <input class="form-control" type="text" name="produto" id="empresa" value="<?php echo $entrega->nome_produto ?>">
        </div>

        <div class="mt-2">
          <label>Endereço de retirada do produto</label>
          <input class="form-control" type="text" name="endereço" id="endereço" value="<?php echo $entrega->enderecoRetirada ?>">
        </div>

        <div class="mt-2">
          <label>Endereço de entrega do produto</label>
          <input class="form-control" type="text" name="entrega" id="entrega" value="<?php echo $entrega->enderecoEntrega ?>">
        </div>

        <div class="mt-2">
          <label>Data</label>
          <input class="form-control" type="date" name="data" id="data" value="<?php echo $entrega->dataEntrega ?>">
        </div>

        <div class="row mt-2">
          <div class="mt-2 col-md-6">
            <label>Horário de retirada do produto</label>
            <input class="form-control" type="time" name="horario" id="horario" value="<?php echo $entrega->horaRetirada ?>">
          </div>
          <div class="mt-2 col-md-6">
            <label>Horário de entrega do produto</label>
            <input class="form-control" type="time" name="hrentrega" id="hrentrega" value="<?php echo $entrega->horaEntrega ?>">
          </div>
        </div>

        <div class="mt-2">
          <label>Descrição do produto</label>
          <textarea rows="5" cols="30" class="form-control" name="descricao" id="descricao1" value="<?php echo $entrega->produtoDescricao ?>"></textarea>
        </div>

        <button class="btn btn-info mb-5 mt-5" type="submit">Atualizar</button>

    </form><!-- Fim Formulário Motoboy -->

  <?php
  }
  ?>

  <footer class=" mt-4 pt-5 pb-5 bg-333333">
    <!-- Início Rodapé -->
    <div class="container">
      <div class="text-center text-light">
        Copyright © 2021 | MotoGo
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