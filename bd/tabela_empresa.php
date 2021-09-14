<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
    $banco = "motogo";

	$conexao = new mysqli ($servidor, $usuario, $senha, $banco); 

	    if ($conexao->connect_error)
		die ("Conexão falhou: " . $conexao->connect_error);
	
	$sql = "CREATE TABLE empresa (
			id_empresa INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			nome VARCHAR(30),
			endereco VARCHAR(100),
			telefone INT,
			cnpj INT,
			descricao VARCHAR(200)
			)";
			
		if ($conexao->query($sql) === TRUE)
			echo "Tabela empresa criada com sucesso";
		else
			echo "Erro criando a tabela empresa: " . $conexao->error;
   
	$conexao->close();
?>