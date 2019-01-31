<?php
  class ContaBanco {

    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($t){
      $this->setTipo($t);
      $this->setStatus(true);
      if($t == "CC"){
        $this->setSaldo(50);
      } elseif ($t == "CP") {
        $this->setSaldo(150);
      }
    }

    public function fecharConta(){
      if($htis->getSaldo() > 0){
        echo "<p>Conta inda tem dinheiro, não posso fechar </p>";
      } elseif ($this->getSaldo() < 0) {
        echo "<p>Conta em débito, não posso fechar. </p>";
      } else {
        $this->setStatus(false);
      }

    }

    public function depositar($v){
      if($this->getStatus()){
        $this->setSaldo($this->getSaldo() + $v);
      } else {
        echo "<p>Conta fecha, não consigo depositar. </p>";
      }

    }

    public function sacar(){

    }
    public function pagarMensal(){

    }

    // Metodos construtores
    public function __construct(){

    }

    public function getnumConta(){
      return $htis->numConta;
    }

    public function geTipo(){
      return $htis->tipo;
    }

    public function getDono(){
      return $htis->dono;
    }

    public function getSaldo(){
      return $htis->saldo;
    }

    public function getStatus(){
      return $htis->status;
    }

    public function setnumConta($numConta){
      $this->numConta = $numConta;
    }

    public function setTipo($tipo){
      $this->tipo = $tipo;
    }

    public function setSaldo($saldo){
      $this->saldo = $saldo;
    }

    public function setDono($dono){
      $this->dono = $dono;
    }

    public function setStatus($status){
      $this->status = $status;
    }









  }