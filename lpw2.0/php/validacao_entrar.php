<?php
$erros = "";

if (!isset($_POST["email"]) || !isset($_POST["senha"])) {
  $erros .= "Todos os campos devem ser preenchidos <br>";
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  $erros .= "O formato de preenchimento do  campo 'Email' é inválido! <br>";
}

if (strlen($_POST["senha"]) < 6 || strlen($_POST["senha"]) > 8) {
  $erros .= "O campo 'Senha' deve ter entre 6 e 8 caracteres! <br>";
}

if (strlen($erros) == 0 and $_POST["email"] == "adm@gmail.com" and $_POST["senha"] == "123456") {
  session_start();
  $_SESSION["email"] = $_POST["email"];
  echo "Login efetuado com sucesso! <br>";
  echo "Você será redirecionado para a página de relatórios. <br>";
  header("refresh: 5; url = ../relatorios.html");
} else {
  if($_POST["email"] != "adm@gmail.com" or $_POST["senha"] != "123456")
    $erros .= 'E-mail e/ou senha inválidos! <br>';
  echo $erros . "<br>";
  echo "Você será redirecionado para a página de login. <br>";
  header("refresh: 5; url = ../login.html");
}