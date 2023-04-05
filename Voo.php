<?php 

  require_once('./Rota.php');
  require_once('./Aeronave.php');

  class Voo {
    private $id;
    private $saida;
    private $chegada;
    private $rota;
    private $aeronave;
    private $tripulacao;    
    
    public function __construct($id, $saida, $chegada, $rota, $aeronave, $tripulacao) {
      $this->id = $id;
      $this->saida = $saida;
      $this->chegada = $chegada;
      $this->rota = $rota;
      $this->aeronave = $aeronave;
      $this->tripulacao = $tripulacao;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getId() {
      return $this->id;
    }

    public function setSaida($saida) {
      $this->saida = $saida;
    }

    public function getSaida() {
      return $this->saida;
    }

    public function setChegada($chegada) {
      $this->chegada = $chegada;
    }

    public function getChegada() {
      return $this->chegada;
    }

    public function setRota($rota) {
      $this->rota = $rota;
    }

    public function getRota() {
      return $this->rota;
    }

    public function setAeronave($aeronave) {
      $this->aeronave = $aeronave;
    }

    public function getAeronave() {
      return $this->aeronave;
    }

    public function setTripulacao($tripulacao) {
      $this->tripulacao = $tripulacao;
    }

    public function getTripulacao() {
      return $this->tripulacao;
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
?>