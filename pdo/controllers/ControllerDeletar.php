<?php
  include("../Class/ClassCrud.php");

  $crud=new ClassCrud();
  $idUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
  $crud->deleteDB(  "cadastro", "id=?", array( $idUser ));

  header("Location: /proj_php/crud_php/pdo/selecionar.php", true, 301);
  // echo "Dado deletado com sucesso!";