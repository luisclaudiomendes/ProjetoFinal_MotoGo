<?php
$erros = "";

if (!isset($_POST["nome"]) || !isset($_POST["endereco"]) || !isset($_POST["telefone"]) || !isset($_POST["cpf"]) || !isset($_POST["email"]) || !isset($_POST["cnh"])) {
  $erros .= "Todos os campos devem ser preenchidos! <br>";
}

if (strlen($_POST["nome"]) < 10) {
  $erros .= "Coloque seu nome completo! <br>";
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  $erros .= "O formato de preenchimento do  campo 'Email' é inválido! <br>";
}

if (!is_numeric($_POST["telefone"])) {
  $erros .= "O campo 'Telefone' deve conter apenas números! <br>";
}

if (!is_numeric($_POST["cpf"])) {
  $erros .= "O campo 'CPF' deve conter apenas números! <br>";
}

if (!is_numeric($_POST["cnh"])) {
  $erros .= "O campo 'CNH' deve conter apenas números! <br>";
}

//redirecionamento
if (isset($_POST["idOculto"])) {
  require_once "../../../model/motoboy.php";
  atualizarMotoboy($_POST["nome"], $_POST["cpf"], $_POST["cnh"], $_POST["telefone"], $_POST["email"], $_POST["endereco"], $_POST["placa"], $_POST["cor"], $_POST["idOculto"]);
  echo "Atualização feita com sucesso! <br>";
  echo "Você será redirecionado para a página inicial do sistema! <br>";
  echo $_POST["idOculto"];
  //header("refresh: 5; url = ../../index.html");
} else {
  require_once "../../../model/motoboy.php";
  inserirMotoboy($_POST["nome"], $_POST["cpf"], $_POST["cnh"], $_POST["telefone"], $_POST["email"], $_POST["endereco"], $_POST["placa"], $_POST["cor"]);
  echo "Cadastro efetuado com sucesso! <br>";
  echo "Você será redirecionado para a página inicial do sistema! <br>";
  //header("refresh:5;url=../../index.html");
}
