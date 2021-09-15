<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "motogo";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error)
	die("Conexão falhou: " . $conexao->connect_error);

$sql = "CREATE TABLE motoboy (
            id_motoboy INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			nome_completo VARCHAR(60),
            cpf INT,
            cnh INT,
            telefone INT,
            email VARCHAR(60),
			endereco VARCHAR(100),
            placa_da_moto VARCHAR(7),
			cor_da_moto VARCHAR(15)
			)";

if ($conexao->query($sql) === TRUE)
	echo "Tabela motoboy criada com sucesso";
else
	echo "Erro criando a tabela motoboy: " . $conexao->error;

$conexao->close();
