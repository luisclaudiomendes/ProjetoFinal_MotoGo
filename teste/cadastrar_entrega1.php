<?php

include "../../../bd/conexaoBD.php";

$erros = "";

if (isset($_POST["data"]) || !isset($_POST["horario"])) {
    $erros .= "Todos os campos devem ser preenchidos! <br>";
}



//redirecionamento

if (isset($_POST["idOculto"])) {
    require_once "../../../model/entregas.php";
    AtualizarEntrega($_POST["idOculto"], $_POST["empresa"], $_POST["nome"], $_POST["produto"], $_POST["endereço"], $_POST["entrega"], $_POST["data"], $_POST["horario"], $_POST["hrentrega"], $_POST["descricao"]);
    echo "Atualização efetuada com sucesso! <br>";
    echo "Você será redirecionado para a página inicial do sistema! <br>";
    header("refresh:5;url=../../index.html");
} else {
    require_once "/opt/lampp/htdocs/motogo/model/entregas.php";
    inserirEntrega1($_POST["data"], $_POST["horario"]);
    echo "Cadastro efetuado com sucesso! <br>";
    echo "Você será redirecionado para a página inicial do sistema! <br>";
    header("refresh:5;url=../../index.html");
}
