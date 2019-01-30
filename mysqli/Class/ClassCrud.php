<?php
class ClassCrud extends ClassConexao{

  // Atributos
  private $crud;
  private $contador;
  private $resultado;

  // preparação das declarativas
  private function preparedStatements($query, $tipos,$parametros)
  {
    $this->countParametros($parametros);

    $con=$this->conectaDB();
    $this->crud=$con->prepare($query);

    if($this->Contador > 0){
      $CallParametros = array();
      foreach($Parametros as $Key => $Parametro){
          $CallParametros[$Key] = &$Parametros[$Key];
      }
      array_unshift($CallParametros, $Tipos);
      call_user_func_array(array($this->Crud,'bind_param'),$CallParametros);
    }

    $this->crud->execute();
    $this->resultado=$this->crud->get_result();

  }

  // contador de parametros
  private function countParametros($parametros)
  {
    $this->contador=count($parametros);
  }



}