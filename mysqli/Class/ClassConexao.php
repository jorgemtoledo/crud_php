<?php
// Conexao MYS!Li
abstract class ClassConexao {
  // Conexão com o banco de dados
  protected function conectaDB()
  {
    try{
      $Con = new mysqli("localhost","root", "root##","crud");
      return $Con;
    }catch (Exception $Erro){
      return $Erro->getMessage();
    }
  }
}