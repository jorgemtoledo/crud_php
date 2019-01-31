<?php
include("ClassConexao.php");
class ClassCrud extends ClassConexao{
  // Atributos
  private $crud;
  private $contador;

  //Preparacao das declarivas
  private function preparedStatements($query, $parametros)
  {
    $this->countParametros($parametros);
    $this->crud=$this->conectaDB()->prepare($query);

    // bind /for
    if($this->contador > 0)
    {
      for($i = 1; $i <= $this->contador; $i++){
        $this->crud->bindValue($i, $parametros[$i - 1]);
      }
    }
    $this->crud->execute();
  }

  // Contador de parametros
  private function countParametros($parametros)
  {
    $this->contador=count($parametros);
  }

  // Inserts db
  public function insertDB($tabela, $condicao, $parametros)
  {
    $this->preparedStatements("insert into {$tabela} values ({$condicao})" , $parametros);
    return $this->crud;
  }

  #Seleção no Banco de Dados
  public function selectDB($campos , $tabela , $condicao , $parametros){
    $this->preparedStatements("select {$campos} from {$tabela} {$condicao}",$parametros);
    return $this->crud;
  }

  #Deletar dados no DB
  public function deleteDB($tabela , $condicao , $parametros){
    $this->preparedStatements("delete from {$tabela} where {$condicao}" , $parametros);
    return $this->crud;
  }

  #Atualização no banco de dados
  public function updateDB($tabela , $set , $condicao , $parametros)
  {
    $this->preparedStatements("update {$tabela} set {$set} where {$condicao}",$parametros);
    return $this->crud;
  }

}