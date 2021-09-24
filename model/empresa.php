<?php
include 'C:\xampp\htdocs\ProjetoFinal_MotoGo\bd\conexaoBD.php'; 

function inserirEmpresa($nome, $endereco, $telefone, $cnpj, $descricao)
{
	global $conexao;
	$prepara = $conexao->prepare("INSERT INTO empresa (nome, endereco, telefone, cnpj, descricao) VALUES (?, ?, ?, ?, ?)");
	$prepara->bind_param("ssiis", $nome, $endereco, $telefone, $cnpj, $descricao);
	$prepara->execute();
}

function atualizarEmpresa($nome, $endereco, $telefone, $cnpj, $descricao, $id)
{
	global $conexao;
	$prepara = $conexao->prepare("UPDATE empresa SET nome = ?, endereco = ?, telefone = ?, cnpj = ?, descricao = ? WHERE id_empresa = ?");
	$prepara->bind_param("ssiisi", $nome, $endereco, $telefone, $cnpj, $descricao, $id);
	$prepara->execute();
}

function excluirEmpresa($id)
{
	global $conexao;
	$prepara = $conexao->prepare("DELETE FROM empresa WHERE id_empresa = ?");
	$prepara->bind_param("i", $id);
	$prepara->execute();
}

function selecionarEmpresaId($id)
{
	global $conexao;
	$prepara = $conexao->prepare("SELECT * FROM empresa WHERE id_empresa = ?");
	$prepara->bind_param("i", $id);
	$prepara->execute();
	$resultado = $prepara->get_result();
	return $resultado->fetch_object();
}

function selecionarTodasEmpresas()
{
	global $conexao;
	$prepara = $conexao->prepare("SELECT * FROM empresa");
	$prepara->execute();
	$resultado = $prepara->get_result();
	while ($a = $resultado->fetch_object()) {
		$empresa[] = $a;
	}
	return $empresa;
}
