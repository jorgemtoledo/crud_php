<?php
include("Class/ClassCrud.php");
    /* Edição de dados */
    if(isset($_GET['id'])){
        $acao="Editar";

        $crud=new ClassCrud();
        $BFetch=$crud->selectDB("*","cadastro","where id=?",array($_GET['id']));
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        $id=$Fetch['id'];
        $nome=$Fetch['nome'];
        $sexo=$Fetch['sexo'];
        $cidade=$Fetch['cidade'];
    }

    /* Cadastro novo */
    else{
        $acao="Cadastrar";
        $id=0;
        $nome="";
        $sexo="";
        $cidade="";
    }
?>

<div class="resultado"></div>

<div class="formulario">
    <h1 class="center">Cadastro</h1>

    <form name="formCadastrar" id="formCadastrar" method="post" action="controllers/ControllerCadastrar.php">
      <input type="hidden" id="acao" name="acao" value="<?php echo $Acao; ?>" >
      <div class="formularioInput">
        Nome: <br>
        <input type="text" id="nome" name="nome">
      </div>

      <div class="formularioInput">
        Sexo: <br>
        <select name="sexo" id="sexo">
          <option value="">Selecione</option>
          <option value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
        </select>
      </div>

      <div class="formularioInput">
        Cidade: <br>
        <input type="text" id="cidade" name="cidade">
      </div>

      <div class="formularioInput formularioInput100 center">
          <input type="submit" value="Cadastrar">
      </div>

    </form>


</div>