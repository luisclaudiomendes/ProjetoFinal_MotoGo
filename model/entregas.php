<?php

include "../bd/conexaoBD.php";


function inserirEntrega($empresa, $nome, $produto, $endereço, $entrega, $data, $horario, $hrentrega, $descricao)
{
	global $conexao;
	$prepara = $conexao->prepare("INSERT INTO entregas (empresa, motoboy, produtoNome, enderecoRetirada, enderecoEntrega, dataEntrega, horaRetirada, horaEntrega, produtoDescricao) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$prepara->bind_param("sssssssss", $empresa, $nome, $produto, $endereço, $entrega, $data, $horario, $hrentrega, $descricao);
	$prepara->execute();
}

function atualizarEntrega($id_empresa, $id_motoboy, $produto, $endereço, $entrega, $data, $horario, $hrentrega, $descricao, $id)
{
	global $conexao;
	$prepara = $conexao->prepare("UPDATE entregas SET id_empresa = ?, id_motoboy = ?, produto = ?, endereço = ?, entrega = ?, data = ?, horario = ?, hrentrega = ?, descricao = ?, WHERE id = ?");
	$prepara->bind_param("iisssssssi", $id_empresa, $id_motoboy, $produto, $endereço, $entrega, $data, $horario, $hrentrega, $descricao, $id);
	$prepara->execute();
}

function excluirEntrega($id)
{
	global $conexao;
	$prepara = $conexao->prepare("DELETE FROM entregas WHERE id = ?");
	$prepara->bind_param("i", $id);
	$prepara->execute();
}


function selecionarTodasEntregas()
{
	global $conexao;
	$prepara = $conexao->prepare("SELECT entregas.id, motoboy.nome_completo as anome, empresa.nome as pnome FROM entregas, motoboy, empresa WHERE entregas.idMotoboy = motoboy.id_motoboy and entregas.idEmpresa = empresa.id_empresa");
	$prepara->execute();
	$resultado = $prepara->get_result();
	while ($ad = $resultado->fetch_object()) {
		$entregas[] = $ad;
	}
	return $entregas;
}

function selecionarEntregaId($id)
{
	global $conexao;
	$prepara = $conexao->prepare("SELECT * FROM entregas WHERE id = ?");
	$prepara->bind_param("i", $id);
	$prepara->execute();
	$resultado = $prepara->get_result();
	return $resultado->fetch_object();
}
