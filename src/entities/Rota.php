<?php

namespace Entities;

class Rota{
  private $id;
  private $distancia;
  private $partida;
  private $destino;

  public function __construct($distancia, $partida, $destino) {
    $this->distancia = $distancia;
    $this->partida = $partida;
    $this->destino = $destino;
  }

  public function setId($id){
    $this ->id = $id;
  }
  public function getId(){
    return $this -> id;
  }

  public function setDistancia($distancia){
    $this ->distancia = $distancia;
  }
  public function getDistancia(){
    return $this -> distancia;
  }

  public function setPartida($partida){
    $this -> partida = $partida;
  }
  public function getPartida(){
    return $this -> partida;
  }

  public function setDestino($destino){
    $this -> destino = $destino;
  }
  public function getDestino(){
    return  $this -> destino;
  }
}
