<?php
include("includes/header.php");
include("Class/ClassCrud.php");
?>

<div class="content">
    <form name="formEnquete" id="formEnquete" action="controllers/ControllerEnquete.php" method="post">
        Você gostou do curso: <br>
        <input type="radio" name="radio" value="Sim"> Sim <br>
        <input type="radio" name="radio" value="Não"> Não <br>
        <input type="submit" value="Votar">
    </form>
</div>

<div>
    <?php
    $crud=new ClassCrud();
    $bSim=$crud->selectDB("*", "enquete", "where voto=?", array("Sim"));
    $bNao=$crud->selectDB("*", "enquete", "where voto=?", array("Não"));

    $fSim=$bSim->rowCount();
    $fNao=$bNao->rowCount();

    echo "Votaram sim: ".$fSim."<br>";
    echo "Votaram não: ".$fNao."<br>";
    ?>
</div>

<?php include("includes/footer.php"); ?>