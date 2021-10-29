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
    <?php include 'menu.php' ?>
  </header><!-- Fim Cabeçalho -->

  <div class="mb-5 pt-5 pb-5 bg-dark">
    <!-- Início Título -->
    <div class="container">
      <h2 class="display-4 text-light">Atualização das Entregas</h2>
    </div>
  </div><!-- Fim Título -->

  <form class="container form-group" method="POST" action="#">
    <!-- Início Formulário Entregas -->

    <label for="entregaEscolhida" class="form-label"> Escolha qual entrega deseja atualizar: </label>
    <select class="custom-select" name="entregaEscolhida" id="entregaEscolhida">

      <option value="null" selected>-- Selecione uma entrega --</option>

      <?php
      require_once "../model/entregas.php";
      $entregas = selecionarTodasEntregas();
      foreach ($entregas as $ad) {
        echo "<option value=$ad->id>" . "Entrega " . $ad->id . "</option>";
        echo "<hr>";
      }
      ?>
      <select><br>
        <button class="btn btn-info mt-5" type="submit">Selecionar</button>

  </form><!-- Fim Formulário Entregas -->

  <?php
  if (isset($_POST["entregaEscolhida"])) {
    require_once "../model/entregas.php";
    $entrega = selecionarEntregaId($_POST["entregaEscolhida"]);

  ?>

    <form class="container form-group mt-5" method="POST" action="php/entrega/atualizar_entrega.php">
      <!-- Início Formulário Entregas -->
      <!-- teste -->
      <div class="mt-2">
        <label for="empresaEscolhida" class="form-label"> Escolha qual empresa deseja selecionar: </label>
        <select class="custom-select" id="empresaEscolhida" name="empresaEscolhida">
          <?php
          require_once "../model/empresa.php";
          $empresas = selecionarTodasEmpresas();
          foreach ($empresas as $a) {
            echo "<option value = $a->id_empresa>" . $a->nome . "</option>";
          }
          ?>
        </select><br>
      </div>

      <div class="mt-2">
        <label for="motoboyEscolhido" class="form-label"> Escolha qual motoboy deseja selecionar: </label>
        <select class="custom-select" id="motoboyEscolhido" name="motoboyEscolhido">
          <?php
          require_once "../model/motoboy.php";
          $motoboys = selecionarTodosMotoboys();
          foreach ($motoboys as $a) {
            echo "<option value = $a->id_motoboy>" . $a->nome_completo . "</option>";
          }

          ?>
        </select><br>
      </div>

      <div class="mt-2">
        <label>Nome do produto</label>
        <input class="form-control" type="text" name="produtoNome" id="produtoNome" value="<?php echo $entrega->produtoNome; ?>">
      </div>

      <div class="mt-2">
        <label>Endereço de retirada do produto</label>
        <input class="form-control" type="text" name="enderecoRetirada" id="enderecoRetirada" value="<?php echo $entrega->enderecoRetirada; ?>">
      </div>

      <div class="mt-2">
        <label>Endereço de entrega do produto</label>
        <input class="form-control" type="text" name="enderecoEntrega" id="enderecoEntrega" value="<?php echo $entrega->enderecoEntrega; ?>">
      </div>

      <div class="mt-2">
        <label>Data de entrega do produto</label>
        <input class="form-control" type="date" name="dataEntrega" id="dataEntrega" value="<?php echo $entrega->dataEntrega; ?>">
      </div>

      <div class="row mt-2">
        <div class="mt-2 col-md-6">
          <label>Horário de retirada do produto</label>
          <input class="form-control" type="time" name="horaRetirada" id="horaRetirada" value="<?php echo $entrega->horaRetirada; ?>">
        </div>
        <div class="mt-2 col-md-6">
          <label>Horário de entrega do produto</label>
          <input class="form-control" type="time" name="horaEntrega" id="horaEntrega" value="<?php echo $entrega->horaEntrega; ?>">
        </div>
      </div>

      <div class="mt-2">
        <label>Descrição do produto</label>
        <textarea rows="5" cols="30" class="form-control" type="text" name="descricao" id="descricao"><?php echo $entrega->produtoDescricao; ?></textarea>
      </div>

      <button class="btn btn-info mt-5 mb-5" type="submit">Atualizar</button>
    </form><!-- Fim Formulário Entregas -->

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