<?php
$erros = "";

if ($_POST["selecao"] == "null") {
    $erros .= "Você deve selecionar uma entrega! <br>";
}

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
}

//redirecionamento
if (strlen($erros) == 0) {
    echo "Atualização feita com sucesso! <br>";
    header("refresh: 5; url = ../../index.html");
} else {
    echo $erros . "<br>";
    echo "Você será redirecionado para a página de atualização. <br>";
    //header("refresh: 5; url = ../../atualizar_empresa.php");
}
