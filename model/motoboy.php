<?php
include "../bd/conexaoBD.php";

function inserirMotoboy($nome, $cpf, $cnh, $telefone, $email, $endereco, $placa, $cor)
{
	global $conexao;
	$prepara = $conexao->prepare("INSERT INTO motoboy (nome_completo, cpf, cnh, telefone, email, endereco, placa_da_moto, cor_da_moto) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$prepara->bind_param("siiissss", $nome, $cpf, $cnh, $telefone, $email, $endereco, $placa, $cor);
	$prepara->execute();
}

function atualizarMotoboy($nome, $cpf, $cnh, $telefone, $email, $endereco, $placa, $cor, $id)
{
	global $conexao;
	$prepara = $conexao->prepare("UPDATE motoboy SET nome_completo = ?, cpf = ?, cnh = ?, telefone = ?, email = ?, endereco = ?, placa_da_moto = ?, cor_da_moto = ? WHERE id_motoboy = ?");
	$prepara->bind_param("siiissssi", $nome, $cpf, $cnh, $telefone, $email, $endereco, $placa, $cor, $id);
	$prepara->execute();
}

function excluirMotoboy($id)
{
	global $conexao;
	$prepara = $conexao->prepare("DELETE FROM motoboy WHERE id_motoboy = ?");
	$prepara->bind_param("i", $id);
	$prepara->execute();
}

function selecionarMotoboyId($id)
{
	global $conexao;
	$prepara = $conexao->prepare("SELECT * FROM motoboy WHERE id_motoboy = ?");
	$prepara->bind_param("i", $id);
	$prepara->execute();
	$resultado = $prepara->get_result();
	return $resultado->fetch_object();
}

function selecionarTodosMotoboys()
{
	global $conexao;
	$prepara = $conexao->prepare("SELECT * FROM motoboy");
	$prepara->execute();
	$resultado = $prepara->get_result();
	while ($a = $resultado->fetch_object()) {
		$motoboys[] = $a;
	}
	return $motoboys;
}
