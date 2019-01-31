<?php
  class ClassCaneta {

  // Atributos
  public $modelo;
  private $ponta;
  private $cor;
  private $tampada;

  // Metodos

  // Metodo Construtor - EX -1
  // public function __construct(){
  //   $this->cor = "Azul";
  //   $this->tampar(true);
  // }
  // Fim contrutor

  // Metodo Construtor - EX -2
  public function __construct($m, $c, $p){
    $this->modelo = $m;
    $this->cor = $c;
    $this->ponta = $p;
    $this->tampar();

  }
  // Fim contrutor



  public function tampar(){
    $this->tampada = true;
  }

  public function getModelo(){
    return $this->modelo;
  }

  public function setModelo($m){
    $this->modelo = $m;
  }

  public function getPonta(){
    return $this->ponta;
  }

  public function setPonta($p){
    $this->ponta = $p;
  }




}