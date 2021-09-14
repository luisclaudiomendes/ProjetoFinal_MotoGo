<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";

	$conexao = new mysqli ($servidor, $usuario, $senha);

	if ($conexao->connect_error)
		die ("Conexão falhou: " . $conexao->connect_error);

	$sql = "CREATE DATABASE motogo";
	if ($conexao->query($sql) === TRUE)
		echo "Banco de dados MotoGo criado com sucesso";
	else
		echo "Erro criando o banco de dados MotoGo: " . $conexao->error;

	$conexao->close();
?>