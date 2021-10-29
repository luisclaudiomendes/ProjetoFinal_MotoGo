<?php
include 'C:\xampp\htdocs\ProjetoFinal_MotoGo\bd\conexaoBD.php';

function entregas_recentes_antigas()
{
  
}

function entregas_antigas_recentes()
{
  global $conexao;
  $prepara = $conexao->prepare("SELECT * FROM `entregas` ORDER BY dataEntrega");
  $prepara->execute();
  $resultado = $prepara->get_result();
        while($r = $resultado->fetch_object()){
    $relatorios[] = $r;
        }
        return $relatorios;
}





function animais_mais_colocados_adocao()
{
  global $conexao;
  $prepara = $conexao->prepare("SELECT tipo, COUNT(tipo) AS quantidade FROM animal GROUP BY tipo ORDER BY COUNT(tipo) DESC");
  $prepara->execute();
  $resultado = $prepara->get_result();
  while ($r = $resultado->fetch_object()) {
    $relatorios[] = $r;
  }
  return $relatorios;
}

function animais_menos_colocados_adocao()
{
  global $conexao;
  $prepara = $conexao->prepare("SELECT tipo, COUNT(tipo) AS quantidade FROM animal GROUP BY tipo ORDER BY COUNT(tipo)");
  $prepara->execute();
  $resultado = $prepara->get_result();
  while ($r = $resultado->fetch_object()) {
    $relatorios[] = $r;
  }
  return $relatorios;
}

function pessoas_mais_adotam()
{
  global $conexao;
  $prepara = $conexao->prepare("SELECT pessoa.nome, COUNT(idPessoa) AS quantidade FROM pessoa, adocao WHERE pessoa.id = adocao.idPessoa GROUP BY idPessoa ORDER BY COUNT(idPessoa) DESC");
  $prepara->execute();
  $resultado = $prepara->get_result();
  while ($r = $resultado->fetch_object()) {
    $relatorios[] = $r;
  }
  return $relatorios;
}

function pessoas_menos_adotam()
{
  global $conexao;
  $prepara = $conexao->prepare("SELECT pessoa.nome, COUNT(idPessoa) AS quantidade FROM pessoa, adocao WHERE pessoa.id = adocao.idPessoa GROUP BY idPessoa ORDER BY COUNT(idPessoa)");
  $prepara->execute();
  $resultado = $prepara->get_result();
  while ($r = $resultado->fetch_object()) {
    $relatorios[] = $r;
  }
  return $relatorios;
}

function animais_mais_preferidos()
{
  global $conexao;
  $prepara = $conexao->prepare("SELECT tipo, COUNT(tipo) AS quantidade FROM animal, adocao WHERE animal.id = adocao.idAnimal GROUP BY tipo ORDER BY COUNT(tipo) DESC");
  $prepara->execute();
  $resultado = $prepara->get_result();
  while ($r = $resultado->fetch_object()) {
    $relatorios[] = $r;
  }
  return $relatorios;
}

function animais_menos_preferidos()
{
  global $conexao;
  $prepara = $conexao->prepare("SELECT tipo, COUNT(tipo) AS quantidade FROM animal, adocao WHERE animal.id = adocao.idAnimal GROUP BY tipo ORDER BY COUNT(tipo)");
  $prepara->execute();
  $resultado = $prepara->get_result();
  while ($r = $resultado->fetch_object()) {
    $relatorios[] = $r;
  }
  return $relatorios;
}
