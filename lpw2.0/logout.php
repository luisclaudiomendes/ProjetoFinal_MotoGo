<?php
  session_start();
  session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> Log-out - MotoGo </title>
</head>

<body>
  <h2> Você foi desconectado do sistema! </h2>
  
  <?php
  header("refresh:5;url=index.php");
?>
</body>
</html>