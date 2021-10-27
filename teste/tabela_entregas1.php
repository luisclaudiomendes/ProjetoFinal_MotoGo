<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "motogo";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error)
	die("Conexão falhou: " . $conexao->connect_error);

$sql = "CREATE TABLE entregas1 (
			id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			dataEntrega DATE,
			hora TIME
			)";

if ($conexao->query($sql) === TRUE)
	echo "Tabela entregas1 criada com sucesso";
else
	echo "Erro criando a tabela entregas: " . $conexao->error;

$conexao->close();
