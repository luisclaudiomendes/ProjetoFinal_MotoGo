<?php

include "../../../bd/conexaoBD.php";

$erros = "";

if (!isset($_POST["empresa"]) || !isset($_POST["motoboy"]) || !isset($_POST["produtoNome"]) || !isset($_POST["enderecoRetirada"]) || !isset($_POST["enderecoEntrega"]) || !isset($_POST["dataEntrega"]) || !isset($_POST["horaRetirada"]) || !isset($_POST["horaEntrega"]) || !isset($_POST["produtoDescricao"])) {
    $erros .= "Todos os campos devem ser preenchidos! <br>";
}

if (strlen($_POST["produtoNome"]) < 2) {
    $erros .= "Coloque o nome do produto completo! <br>";
}

if (strlen($_POST["enderecoRetirada"]) < 10) {
    $erros .= "Coloque o endereço de retirada completo! <br>";
}

if (strlen($_POST["enderecoEntrega"]) < 10) {
    $erros .= "Coloque o endereço de entrega completo! <br>";
}


if (isset($_POST["idOculto"])) {
    require_once "../../../model/entregas.php";
    AtualizarEntrega($_POST["idOculto"], $_POST["empresa"], $_POST["nome"], $_POST["produto"], $_POST["endereço"], $_POST["entrega"], $_POST["data"], $_POST["horario"], $_POST["hrentrega"], $_POST["descricao"]);
    echo "Atualização efetuada com sucesso! <br>";
    echo "Você será redirecionado para a página inicial do sistema! <br>";
    header("refresh:5;url=../../index.html");
} else {
    require_once "../../../model/entregas.php";
    inserirEntrega($_POST["empresaEscolhida"], $_POST["motoboyEscolhido"], $_POST["empresaEscolhida"], $_POST["motoboyEscolhido"], $_POST["produtoNome"], $_POST["enderecoRetirada"], $_POST["enderecoEntrega"], $_POST["data"], $_POST["horaRetirada"], $_POST["horaEntrega"], $_POST["descricao"]);
    echo "Cadastro efetuado com sucesso! <br>";
    echo "Você será redirecionado para a página inicial do sistema! <br>";
    //header ("refresh:5;url=../../index.html");
}
