<?php

class Checkin {
  private $id;
  private $malas;
  private $peso_das_malas;
  private $peso_bagagem_de_mao;
  private $voo_id;

  public function setId ($id) {
    $this -> id = $id;
  }

    public function getId () {
    return $this -> id;
  }

    public function setMalas ($malas) {
    $this -> malas = $malas;
  }

    public function getMalas () {
    return $this -> malas;
  }

    public function setPeso_malas ($peso_das_malas) {
    $this -> peso_das_malas = $peso_das_malas;
  }

    public function getPeso_malas () {
    return $this -> peso_das_malas;
  }

    public function setPeso_mao ($peso_bagagem_de_mao) {
    $this -> peso_bagagem_de_mao = $peso_bagagem_de_mao;
  }

    public function getPeso_mao () {
    return $this -> peso_bagagem_de_mao;
  }

    public function setVoo_id ($voo_id) {
    $this -> voo_id = $voo_id;
  }

    public function getVoo_id () {
    return $this -> voo_id;
  }
  
}

$checkin = new Checkin();
$checkin->setId("10");
$checkin->setPeso_malas("20kg");
echo $checkin->getId()."\n".$checkin->getPeso_malas();

?>