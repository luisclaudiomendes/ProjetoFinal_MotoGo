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
    <?php include 'menu.php' ?>
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

      <div class="mt-2">
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

  <div>
    <?php include 'footer.php' ?>
  </div>

  <?php include 'js_bootstrap.php' ?>
</body>

</html>