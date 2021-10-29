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
      <h2 class="display-4 text-light">Cadastro das Entregas</h2>
    </div>
  </div><!-- Fim Título -->

  <form class="container form-group" method="POST" action="php/entrega/cadastrar_entrega.php">
    <!-- Início Formulário Entregas -->
    <div class="mt-2">
      <label for="empresaEscolhida" class="form-label"> Escolha qual empresa deseja selecionar: </label>
      <select class="custom-select" id="empresaEscolhida" name="empresaEscolhida">
        <option value="null" selected>-- Selecione uma empresa --</option>

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

    <div class="mt-2">
      <label>Nome do produto</label>
      <input class="form-control" type="text" name="produtoNome" id="produtoNome">
    </div>

    <div class="mt-2">
      <label>Endereço de retirada do produto</label>
      <input class="form-control" type="text" name="enderecoRetirada" id="enderecoRetirada">
    </div>

    <div class="mt-2">
      <label>Endereço de entrega do produto</label>
      <input class="form-control" type="text" name="enderecoEntrega" id="enderecoEntrega">
    </div>

    <div class="mt-2">
      <label>Data de entrega do produto</label>
      <input class="form-control" type="date" name="data" id="data">
    </div>

    <div class="row mt-2">
      <div class="mt-2 col-md-6">
        <label>Horário de retirada do produto</label>
        <input class="form-control" type="time" name="horaRetirada" id="horaRetirada">
      </div>
      <div class="mt-2 col-md-6">
        <label>Horário de entrega do produto</label>
        <input class="form-control" type="time" name="horaEntrega" id="horaEntrega">
      </div>
    </div>

    <div class="mt-2">
      <label>Descrição do produto</label>
      <textarea rows="5" cols="30" class="form-control" type="text" name="descricao" id="descricao" placeholder="Exemplo: o que é, quantidades, peso estimado, fragilidade, etc..."></textarea>
    </div>

    <button class="btn btn-info mt-5 mb-5" type="submit">Cadastrar</button>
  </form><!-- Fim Formulário Entregas -->

  <div>
    <?php include 'footer.php' ?>
  </div>

  <?php include 'js_bootstrap.php' ?>
</body>

</html>