<?php
require_once('./Voo.php');
require_once('./Rota.php');
require_once('./Aeronave.php');

class Reserva {
  private $numeroDaReserva;
  private $dataHora;
  private $numeroDoAssento;
  private $vooId;
  private $classeDaCabine;

  public function __construct($numeroDaReserva, $dataHora, $numeroDoAssento, $vooId, $classeDaCabine) {
    $this->numeroDaReserva = $numeroDaReserva;
    $this->dataHora = $dataHora;
    $this->numeroDoAssento = $numeroDoAssento;
    $this->vooId = $vooId;
    $this->classeDaCabine = $classeDaCabine;
  }

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

  public function setVoo($vooId) {
    $this -> vooId = $vooId;
  }

  public function getVoo() {
    return $this->vooId;
  }
  public function setClasseDaCabine($classeDaCabine) {
    $this -> classeDaCabine = $classeDaCabine;
  }

  public function getClasseDaCabine() {
    return $this->classeDaCabine;
  }
}

?>