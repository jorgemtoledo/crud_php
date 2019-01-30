<?php
  include("includes/header.php");
  include("Class/ClassCrud.php");
?>

  <div class="content">

   <?php
        $crud=new ClassCrud();
        $edUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

        $BFetch=$crud->selectDB(
            "*",
            "cadastro",
            "where Id=?",
            array($edUser)
        );
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    ?>
    <h1>Dados do Usuário</h1>
    <hr>
    <strong>Nome:</strong> <?php echo $Fetch['nome']; ?><br>
    <strong>Cidade:</strong> <?php echo $Fetch['cidade']; ?><br>
    <strong>Sexo:</strong> <?php echo $Fetch['sexo']; ?><br>

  </div>

<?php include("includes/footer.php") ?>

