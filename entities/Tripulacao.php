<?php
class Tripulacao {
  private $nome;
  private $funcao;
  private $horario;

  
  public function __construct($nome, $funcao, $horario) {
    $this->nome = $nome;
    $this->funcao = $funcao;
    $this->horario = $horario;
  }

  public function getNome() {
    return $this->nome;
  }

    public function getFuncao() {
    return $this->funcao;
  }

    public function getHorario() {
    return $this->horario;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }


  public function setFuncao($funcao) {
    $this->funcao = $funcao;
  }

  public function setHorario($horario) {
    $this->horario = $horario;
  }
}
