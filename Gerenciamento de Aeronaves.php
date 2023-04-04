<?php
class Aeronave {
  private $modelo;
  private $ano_fabricacao;
  private $numero_assentos;
  private $outras_informacoes;

  
  public function __construct($modelo, $ano_fabricacao, $numero_assentos, $outras_informacoes) {
    $this->modelo = $modelo;
    $this->ano_fabricacao = $ano_fabricacao;
    $this->numero_assentos = $numero_assentos;
    $this->outras_informacoes = $outras_informacoes;
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
}


class CompanhiaAerea {
  private $aeronaves;

  public function __construct() {
    $this->aeronaves = array();
  }

  
  public function adicionarAeronave($aeronave) {
    array_push($this->aeronaves, $aeronave);
  }

  
  public function removerAeronave($index) {
    unset($this->aeronaves[$index]);
  }

  
  public function listarAeronaves() {
    foreach ($this->aeronaves as $aeronave) {
      echo "Modelo: " . $aeronave->getModelo() . "<br>";
      echo "Ano de Fabricação: " . $aeronave->getAnoFabricacao() . "<br>";
      echo "Número de Assentos: " . $aeronave->getNumeroAssentos() . "<br>";
      echo "Outras Informações: " . $aeronave->getOutrasInformacoes() . "<br><br>";
    }
  }
}

$companhia_aerea = new CompanhiaAerea();

$aeronave1 = new Aeronave("Boeing 737", "2005", "189", "Possui sistema de entretenimento a bordo.");
$aeronave2 = new Aeronave("Airbus A320", "2010", "174", "Possui assentos confortáveis.");

$companhia_aerea->adicionarAeronave($aeronave1);
$companhia_aerea->adicionarAeronave($aeronave2);

$companhia_aerea->listarAeron