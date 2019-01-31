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
        $password=$Fetch['password'];
        $sexo=$Fetch['sexo'];
        $cidade=$Fetch['cidade'];
    }

    /* Cadastro novo */
    else{
        $acao="Cadastrar";
        $id=0;
        $nome="";
        $password="";
        $sexo="";
        $cidade="";
    }
?>

<div class="resultado"></div>

<div class="formulario">
    <h1 class="center">Cadastro</h1>

    <form name="formCadastrar" id="formCadastrar" method="post" action="controllers/ControllerCadastrar.php">
      <input type="hidden" id="acao" name="acao" value="<?php echo $acao; ?>" >
      <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" >
      <div class="formularioInput">
        Nome: <br>
        <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" >
      </div>

      <div class="formularioInput">
        Senha: <br>
        <input type="password" id="password" name="password" value="<?php echo $password; ?>" >
      </div>

      <div class="formularioInput">
        Sexo: <br>
        <select name="sexo" id="sexo">
          <option value="<?php echo $sexo; ?>"><?php echo $sexo; ?></option>
          <option value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
        </select>
      </div>

      <div class="formularioInput">
        Cidade: <br>
        <input type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>">
      </div>

      <div class="formularioInput formularioInput100 center">
          <input type="submit" value="<?php echo $acao; ?>">
      </div>

    </form>


</div>