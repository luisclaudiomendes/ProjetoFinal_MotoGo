<?php
session_start();
if (!isset($_SESSION["email"])) {
  header("Location: login.html");
}
?>

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
      <h2 class="display-4 text-light">Empresas que menos solicitaram entregas</h2>
    </div>
  </div><!-- Fim Título -->

  <div class="container">

    <h3 class="display-4 mb-5" style="font-size: 2.5rem;"> Empresas que menos solicitaram entregas </h3>
    <?php
    require_once 'C:/xampp/htdocs/ProjetoFinal_MotoGo/model/relatorios.php';
    $relatorio = empresas_menos_solicitaram_entregas();
    foreach ($relatorio as $r) {
      echo "Empresa: " . $r->empresa . "<br>";
      echo "Quantidade de solicitações: " . $r->solicitacoes . "<br>";
      echo "<hr>";
    }
    ?>

  </div>

  <div>
    <?php include 'footer.php' ?>
  </div>

  <?php include 'js_bootstrap.php' ?>
</body>

</html>