<?php 

  class Voo {
    private $id;
    private $saida;
    private $chegada;
    private $rotaId;
    private $aeronaveId;
    private $tripulacaoId;    
    
    public function __construct($saida, $chegada, $rotaId, $aeronaveId, $tripulacaoId) {
      $this->saida = $saida;
      $this->chegada = $chegada;
      $this->rotaId = $rotaId;
      $this->aeronaveId = $aeronaveId;
      $this->tripulacaoId = $tripulacaoId;
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

    public function setRotaId($rotaId) {
      $this->rotaId = $rotaId;
    }

    public function getRotaId() {
      return $this->rotaId;
    }

    public function setAeronave($aeronaveId) {
      $this->aeronaveId = $aeronaveId;
    }

    public function getAeronaveId() {
      return $this->aeronaveId;
    }

    public function setTripulacaoId($tripulacaoId) {
      $this->tripulacaoId = $tripulacaoId;
    }

    public function getTripulacaoId() {
      return $this->tripulacaoId;
    }
  }


?>