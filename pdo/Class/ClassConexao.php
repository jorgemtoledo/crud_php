<?php

abstract class ClassConexao {
  // Conexão com o banco de dados
  protected function conectaDB()
  {
    try{
      $Con = new PDO("mysql:host=localhost;dbname=crud","root", "root##");
      return $Con;
    }catch (PDOException $Erro){
      return $Erro->getMessage();
    }
  }
}