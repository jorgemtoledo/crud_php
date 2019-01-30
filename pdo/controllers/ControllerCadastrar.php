<?php
include("../includes/variaveis.php");
include("../Class/ClassCrud.php");

$crud = new ClassCrud();

if($acao=='cadastrar'){
  $crud->insertDB( "cadastro","?,?,?,?", array( $id, $nome, $sexo, $cidade));
} else {

}



echo "Cadastro Realizado com Sucesso!";
