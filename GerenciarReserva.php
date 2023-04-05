<?php 

// Gerenciamento de reservas: O sistema deve permitir que os 
//usuários façam reservas de voos operados pelas companhias
// aéreas, e o administrador deve poder gerenciar essas
//reservas, cancelando-as ou alterando-as, se necessário.


class gerenciarReservas {
  private $numeroDaReserva;
  private $dataHora;
  private $numeroDoAssento;
  private $numeroDoVoo;
  private $origemEDestinoDoVoo;
  private $classeDaCabine;

  public function __construct() {}

  public function setNumeroDaReserva($numeroDaReserva) {
    $this->numeroDaReserva = $numeroDaReserva;
  }

  public function getNumeroDaReserva() {
    return $this->numeroDaReserva;
  }
  
  public function setDataHora($dataHora) {
    $this->dataHora = $dataHora;
  }

  public function getDataHora() {
    return $this->dataHora;
  }

  public function setNumeroDoAcento($numeroDoAssento) {
    $this->numeroDoAssento = $numeroDoAssento;
  }

  public function getNumeroDoAssento() {
    return $this->numeroDoAssento;
  }

  public function setNumeroDoVoo($numeroDoVoo) {
    $this -> numeroDoVoo = $numeroDoVoo;
  }

  public function getNumeroDoVoo() {
    return $this->numeroDoVoo;
  }
  public function setOrigemEDestinoDoVoo($origemEDestinoDoVoo) {
    $this -> origemEDestinoDoVoo = $origemEDestinoDoVoo;
  }

  public function getOrigemEDestinoDoVoo() {
    return $this->origemEDestinoDoVoo;
  }
  public function setClasseDaCabine($classeDaCabine) {
    $this -> classeDaCabine = $classeDaCabine;
  }

  public function getClasseDaCabine() {
    return $this->classeDaCabine;
  }
}

?>