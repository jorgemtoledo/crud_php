<?php
include("../includes/variaveis.php");
include("../Class/ClassCrud.php");

$crud = new ClassCrud();

if($acao == 'Cadastrar'){
  $crud->insertDB( "cadastro","?,?,?,?,?", array( $id, $nome, base64_encode($password), $sexo, $cidade));
  echo "Cadastro Realizado com Sucesso!";
} else {
  $crud->updateDB(
    "cadastro",
    "nome=?, password=?, sexo=?,cidade=?",
    "id=?",
    array(
      $nome,
      base64_encode($password),
      $sexo,
      $cidade,
      $id
    )
  );
  echo "Cadastro editado com Sucesso!";
}