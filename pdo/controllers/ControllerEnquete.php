<?php
include("../includes/variaveis.php");
include("../Class/ClassCrud.php");

$crud=new ClassCrud();
$crud->insertDB("enquete", "?,?", array($id, $radio));
echo "Voto realizado com sucesso";