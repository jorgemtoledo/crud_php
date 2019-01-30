<?php include("includes/header.php") ?>

  <div class="content">

  <?php
    include("Class/ClassConexao.php");
    include("Class/ClassCrud.php");
    // $conexao = new ClassConexao();
    // // $conexao->conectaDB();
    // var_dump($conexao->conectaDB());

    $crud = new ClassCrud();
    // $crud->preparedStatements('teste', array(1,2,3,4));
  ?>

  </div>

  <?php include("includes/footer.php") ?>

