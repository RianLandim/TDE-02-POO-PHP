<?php
require_once('./Voo.php');
require_once('./Rota.php');
require_once('./Aeronave.php');

class Reserva {
  private $numeroDaReserva;
  private $dataHora;
  private $numeroDoAssento;
  private $voo;
  private $classeDaCabine;

  public function __construct($numeroDaReserva, $dataHora, $numeroDoAssento, $voo, $classeDaCabine) {
    $this->numeroDaReserva = $numeroDaReserva;
    $this->dataHora = $dataHora;
    $this->numeroDoAssento = $numeroDoAssento;
    $this -> voo = $voo;
    $this -> classeDaCabine = $classeDaCabine;
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

  public function setVoo($voo) {
    $this -> voo = $voo;
  }

  public function getVoo() {
    return $this->voo;
  }
  public function setClasseDaCabine($classeDaCabine) {
    $this -> classeDaCabine = $classeDaCabine;
  }

  public function getClasseDaCabine() {
    return $this->classeDaCabine;
  }
}


$aeronave = new Aeronave('BOING 737', '2020', 100, '');
$rota = new Rotas(1, "1000 KM", "Fortaleza", "Crato");

$voo = new Voo(
  1,
  date('m/d/Y h:i:s a', time()),
  date('m/d/Y h:i:s a', time()),
  $rota,
  $aeronave,
  ''
);

$reserva = new Reserva(
  1,
  date('m/d/Y h:i:s a', time()),
  8,
  $voo,
  "Premium"
);

var_dump($reserva);

?>