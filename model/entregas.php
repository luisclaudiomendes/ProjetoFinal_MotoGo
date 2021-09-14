<?php

	include "../bd/conexaoBD.php";
	
	function inserirEntrega()
	{
			
	}
	
	function atualizarEntrega()
	{
			
	}
	
	function excluirEntrega()
	{
			
	}
	

	function selecionarTodasEntregas()
	{
			global $conexao;
			$prepara = $conexao->prepare("SELECT entregas.id, motoboy.nome_completo as anome, empresa.nome as pnome FROM entregas, motoboy, empresa WHERE entregas.idMotoboy = motoboy.id_motoboy and entregas.idEmpresa = empresa.id_empresa");
			$prepara->execute();
			$resultado = $prepara->get_result();
			while($ad = $resultado->fetch_object()){
				$entregas[] = $ad;
			}
			return $entregas;
	}

?>
	