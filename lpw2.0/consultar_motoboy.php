<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Consulta de Motoboy - MotoGo</title>

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
      <h2 class="display-4 text-light">Consulta do Motoboy</h2>
    </div>
  </div><!-- Fim Título -->

  <form class="container form-group" method="POST" action="#">
    <!-- Início Formulário Motoboy -->

    <label for="motoboyEscolhido" class="form-label"> Escolha qual motoboy deseja consultar no banco de dados: </label>
    <select class="custom-select" name="motoboyEscolhido" id="motoboyEscolhido">

      <option value="null" selected>-- Selecione um motoboy --</option>

      <?php
      require_once "../model/motoboy.php";
      $motoboys = selecionarTodosMotoboys();
      foreach ($motoboys as $a) {
        echo "<option value = $a->id_motoboy>" . $a->nome_completo . "</option>";
      }
      ?>
      <select><br>
        <button class="btn btn-info mt-5" type="submit">Consultar</button>

  </form><!-- Fim Formulário Motoboy -->


  <?php
  if (isset($_POST["motoboyEscolhido"])) {
    require_once "../model/motoboy.php";
    $motoboy = selecionarMotoboyId($_POST["motoboyEscolhido"]);

    echo '<div class="container mt-5">';
    echo '<table class="table table-bordered table-hover" >';
    echo '<tr class="text-white" style="background: #036970">';
    echo '<th>Nome Completo</th>';
    echo '<th>CPF</th>';
    echo '<th>CNH</th>';
    echo '<th>Telefone</th>';
    echo '<th>Email</th>';
    echo '<th>Endereço</th>';
    echo '<th>Placa da Moto</th>';
    echo '<th>Cor da Moto</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td> ' . $motoboy->nome_completo . '</td>';
    echo '<td>' . $motoboy->cpf . '</td>';
    echo '<td>' . $motoboy->cnh . '</td>';
    echo '<td>' . $motoboy->telefone . '</td>';
    echo '<td>' . $motoboy->email . '</td>';
    echo '<td>' . $motoboy->endereco . '</td>';
    echo '<td>' . $motoboy->placa_da_moto . '</td>';
    echo '<td>' . $motoboy->cor_da_moto . '</td>';
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