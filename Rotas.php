<?php
class Rotas{
    private $id;
    private $distancia;
    private $partida;
    private $destino;

    public function __construct($id, $dist, $part, $dest) {
        $this->id = $id;
        $this->distancia = $dist;
        $this->partida = $part;
        $this->destino = $dest;
      }

    public function setId($id){
        $this -> id = $id;
    }
    public function getId($id){
        return $this -> id;
    }

    public function setDistancia($distancia){
        $this -> distancia = $distancia;
    }
    public function getDistancia($distancia){
        return $this -> distancia;
    }

    public function setPartida($partida){
        $this -> partida = $partida;
    }
    public function getPartida($partida){
        return $this -> partida;
    }

    public function setDestino($destino){
        $this -> destino = $destino;
    }
    public function getDestino($destino){
        return  $this -> destino;
    }

}

$rotas1 = new Rotas(001, "1000 KM", "Fortaleza", "Crato");

echo $rotas1;
?>