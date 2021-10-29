<?php

include "../../../bd/conexaoBD.php";

$erros = "";

if (!isset($_POST["nome"]) || !isset($_POST["endereco"]) || !isset($_POST["telefone"]) || !isset($_POST["cnpj"]) || !isset($_POST["descricao"])) {
    $erros .= "Todos os campos devem ser preenchidos! <br>";
}

if (strlen($_POST["nome"]) < 3) {
    $erros .= "Coloque o nome completo da empresa! <br>";
}

if (!is_numeric($_POST["telefone"])) {
    $erros .= "O campo 'Telefone' deve conter apenas números! <br>";
}

if (!is_numeric($_POST["cnpj"])) {
    $erros .= "O campo 'CNPJ' deve conter apenas números! <br>";
}

if (strlen($_POST["endereco"]) < 10) {
    $erros .= "Coloque o endereço completo! <br>";
}

//redirecionamento

if (isset($_POST["idOculto"])) {
    require_once "../../../model/empresa.php";
    AtualizarEmpresa($_POST["nome"], $_POST["endereco"], $_POST["telefone"], $_POST["cnpj"], $_POST["descricao"], $_POST["idOculto"]);
    echo "Atualização efetuada com sucesso! <br>";
    echo "Você será redirecionado para a página inicial do sistema! <br>";
    header("refresh:5;url=../../index.html");
} else {
    require_once "../../../model/empresa.php";
    inserirEmpresa($_POST["nome"], $_POST["endereco"], $_POST["telefone"], $_POST["cnpj"], $_POST["descricao"]);
    echo "Cadastro efetuado com sucesso! <br>";
    echo "Você será redirecionado para a página inicial do sistema! <br>";
    header("refresh:5;url=../../index.html");
}
