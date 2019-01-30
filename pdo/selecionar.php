<?php
  include("includes/header.php");
  include("Class/ClassCrud.php");
?>

  <div class="content">


    <table class="tabelaCrud">
        <tr>
            <td>Nome</td>
            <td>Sexo</td>
            <td>Cidade</td>
            <td>Ações</td>
        </tr>

        <!-- Estrutura de loop -->
        <?php
        $crud=new ClassCrud();
        $BFetch=$crud->selectDB("*","cadastro", "", array());

        while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <td><?php echo $Fetch['nome']; ?></td>
            <td><?php echo $Fetch['sexo']; ?></td>
            <td><?php echo $Fetch['cidade']; ?></td>
            <td>
                <a href="<?php echo "visualizar.php?id={$Fetch['id']}"; ?>"><i class="fa fa-search"></i>Visualizar</a>
                <a href="<?php echo "cadastro.php?id={$Fetch['id']}"; ?>"><i class="fa fa-refresh"></i>Editar</a>
                <a class="deletar" href="<?php echo "deletar.php?id={$Fetch['id']}"; ?>"><i class="fa fa-trash"></i>Deletar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
  </div>

<?php include("includes/footer.php") ?>

