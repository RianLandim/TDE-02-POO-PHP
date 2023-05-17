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
    
    public function __construct($saida, $chegada, $rota, $aeronave, $tripulacao) {
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


?>