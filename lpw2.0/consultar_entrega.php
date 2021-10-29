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
      <h2 class="display-4 text-light">Consulta de Entregas</h2>
    </div>
  </div><!-- Fim Título -->

  <form class="container form-group" method="POST" action="#">
    <!-- Início Formulário Entregas -->

    <label for="entregaEscolhida" class="form-label"> Escolha qual entrega deseja consultar: </label>
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
        <button class="btn btn-info mt-5" type="submit">Consultar</button>

  </form><!-- Fim Formulário Entregas -->

  <?php
  if (!empty($_POST["entregaEscolhida"])) {
    require_once "../model/entregas.php";
    $entrega = selecionarEntregaId($_POST["entregaEscolhida"]);

    echo '<div class="container mt-5">';
    echo '<table class="table table-bordered table-hover" >';
    echo '<tr class="text-white" style="background: #036970">';
    echo '<th>Empresa</th>';
    echo '<th>Motoboy</th>';
    echo '<th>Nome do produto</th>';
    echo '<th>Endereço de Retirada do Produto</th>';
    echo '<th>Endereço de Entrega do Produto</th>';
    echo '<th>Data de Entrega</th>';
    echo '<th>Horário de Retirada do Produto</th>';
    echo '<th>Horário de Entrega do Produto</th>';
    echo '<th>Descrição do Produto</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>' . $entrega->nome_empresa . '</td>';
    echo '<td>' . $entrega->nome_motoboy . '</td>';
    echo '<td>' . $entrega->produtoNome . '</td>';
    echo '<td>' . $entrega->enderecoRetirada . '</td>';
    echo '<td>' . $entrega->enderecoEntrega . '</td>';
    echo '<td>' . $entrega->dataEntrega . '</td>';
    echo '<td>' . $entrega->horaRetirada . '</td>';
    echo '<td>' . $entrega->horaEntrega . '</td>';
    echo '<td>' . $entrega->produtoDescricao . '</td>';
    echo '</tr>';
    echo '</table>';
    echo '</div>';
  }
  ?>

  <div>
    <?php include 'footer.php' ?>
  </div>

  <?php include 'js_bootstrap.php' ?>
</body>

</html>