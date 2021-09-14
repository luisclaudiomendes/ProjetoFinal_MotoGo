<?php

include "../../../bd/conexaoBD.php";

$erros = "";

if (!isset($_POST["entregaEscolhida"])) {
  $erros .= "O campo deve ser preenchido. <br>";
}

if (strlen($erros) == 0) {
  echo "A entrega foi removida com sucesso! <br>";
  echo $_POST["entregaEscolhida"];
  header("refresh: 5; url = ../../index.html");
} else {
  echo $erros . "<br>";
  echo "Você será redirecionado para a página de remoção. <br>";
  header("refresh: 5; url = ../../remover_entrega.html");
}