<?php 
  namespace Test;

  use PHPUnit\Framework\TestCase;
  use Entities\Rota;

  class RotaTest extends TestCase {
    public function testCreateClass() {
      $this->assertInstanceOf(Rota::class, new Rota('200km', 'SBJU' , 'GRU'));
    }

    public function testClassValues() {
      $rotas = new Rota('200km', 'SBJU' , 'GRU');
      $this->assertEquals($rotas->getDistancia(), '200km');
      $this->assertEquals($rotas->getPartida(), 'SBJU');
      $this->assertEquals($rotas->getDestino(), 'GRU');
    }
  }