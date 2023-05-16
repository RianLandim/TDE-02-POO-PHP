<?php
class Aeronave {
  private $modelo;
  private $ano_fabricacao;
  private $numero_assentos;
  private $outras_informacoes;
  private $id

  
  public function __construct($modelo, $ano_fabricacao, $numero_assentos, $outras_informacoes, $id) {
    $this->modelo = $modelo;
    $this->ano_fabricacao = $ano_fabricacao;
    $this->numero_assentos = $numero_assentos;
    $this->outras_informacoes = $outras_informacoes;
    $this->id =$id;
  }

  public function getModelo() {
    return $this->modelo;
  }

  public function setModelo($modelo) {
    $this->modelo = $modelo;
  }

  public function getAnoFabricacao() {
    return $this->ano_fabricacao;
  }

  public function setAnoFabricacao($ano_fabricacao) {
    $this->ano_fabricacao = $ano_fabricacao;
  }

  public function getNumeroAssentos() {
    return $this->numero_assentos;
  }

  public function setNumeroAssentos($numero_assentos) {
    $this->numero_assentos = $numero_assentos;
  }

  public function getOutrasInformacoes() {
    return $this->outras_informacoes;
  }

  public function setOutrasInformacoes($outras_informacoes) {
    $this->outras_informacoes = $outras_informacoes;
  }

  public function getid() {
    return $this->id;
  }

  public function setid($id) {
    $this->id = $id;
  }
}
  
   