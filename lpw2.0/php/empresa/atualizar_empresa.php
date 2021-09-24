<?php
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
if (strlen($erros) == 0) {
    require_once "../../../model/empresa.php";
    atualizarEmpresa($_POST["nome"], $_POST["endereco"], $_POST["telefone"], $_POST["cnpj"], $_POST["descricao"], $_POST["idOculto"]);
    echo "Atualização feita com sucesso! <br>";
    header("refresh: 5; url = ../../index.html");
} else {
    echo $erros . "<br>";
    echo "Você será redirecionado para a página de atualização. <br>";
    header("refresh: 5; url = ../../atualizar_empresa.php");
}
