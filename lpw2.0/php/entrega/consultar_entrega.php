<?php
$erros = "";

if (!isset($_POST["entregaEscolhida"])) {
    $erros .= "O campo deve ser preenchido. <br>";
}

if (strlen($erros) == 0) {
    echo "Consulta feita com sucesso! <br>";
    echo $_POST["entregaEscolhida"];
    header("refresh: 5; url = ../../index.html");
} else {
    echo $erros . "<br>";
    echo "Você será redirecionado para a página de consulta. <br>";
    //header("refresh: 5; url = ../../consultar_entrega.html");
}
