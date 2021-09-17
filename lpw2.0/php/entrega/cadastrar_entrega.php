<?php

include "../../../bd/conexaoBD.php";

/*$erros = "";

if (!isset($_POST["empresa"]) || !isset($_POST["nome"]) || !isset($_POST["produto"]) || !isset($_POST["endereço"]) || !isset($_POST["entrega"]) || !isset($_POST["data"]) || !isset($_POST["horario"]) || !isset($_POST["hrentrega"]) || !isset($_POST["descricao"])) {
    $erros .= "Todos os campos devem ser preenchidos! <br>";
}

if (strlen($_POST["empresa"]) < 3) {
    $erros .= "Coloque o nome completo da empresa! <br>";
}

if (strlen($_POST["nome"]) < 4) {
    $erros .= "Coloque o nome completo do motoboy! <br>";
}

if (strlen($_POST["endereço"]) < 10) {
    $erros .= "Coloque o endereço de retirada completo! <br>";
}

if (strlen($_POST["entrega"]) < 10) {
    $erros .= "Coloque o endereço de entrega completo! <br>";
}*/

//redirecionamento

/*if (isset($_POST["idOculto"])) {
    require_once "../../../model/entregas.php";
    AtualizarEntrega($_POST["idOculto"], $_POST["empresa"], $_POST["nome"], $_POST["produto"], $_POST["endereço"], $_POST["entrega"], $_POST["data"], $_POST["horario"], $_POST["hrentrega"], $_POST["descricao"]);
    echo "Atualização efetuada com sucesso! <br>";
    echo "Você será redirecionado para a página inicial do sistema! <br>";
    header("refresh:5;url=../../index.html");
}*/ if (isset($_POST["empresaEscolhida"]) and isset($_POST["motoboyEscolhido"])) {
    require_once "../../../model/entregas.php";
    inserirEntrega($_POST["empresaEscolhida"], $_POST["motoboyEscolhido"], $_POST["empresaEscolhida"], $_POST["motoboyEscolhido"], $_POST["produtoNome"], $_POST["enderecoRetirada"], $_POST["enderecoEntrega"], $_POST["data"], $_POST["horaRetirada"], $_POST["horaEntrega"], $_POST["descricao"]);
    echo "Cadastro efetuado com sucesso! <br>";
    echo "Você será redirecionado para a página inicial do sistema! <br>";
    //header ("refresh:5;url=../../index.html");
}
