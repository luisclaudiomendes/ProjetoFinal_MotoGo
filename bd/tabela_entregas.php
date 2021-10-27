<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "motogo";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error)
	die("Conexão falhou: " . $conexao->connect_error);

$sql = "CREATE TABLE entregas (
			id_motoboy int UNSIGNED, FOREIGN KEY (id_motoboy) REFERENCES motoboy(id_motoboy),
			id_empresa int UNSIGNED, FOREIGN KEY (id_empresa) REFERENCES empresa(id_empresa),
			motoboy VARCHAR(60),
			empresa VARCHAR(30),
			produtoNome VARCHAR(30),
			produtoDescricao VARCHAR(100),
			enderecoRetirada VARCHAR(100),
			enderecoEntrega VARCHAR(100),
			id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			dataEntrega DATE,
			horaRetirada TIME,
			horaEntrega TIME
			)";

if ($conexao->query($sql) === TRUE)
	echo "Tabela entregas criada com sucesso";
else
	echo "Erro criando a tabela entregas: " . $conexao->error;

$conexao->close();
