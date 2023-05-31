<?php 
  namespace Test;

  use PHPUnit\Framework\TestCase;
  use Entities\Aeronave;

  class AeronaveTest extends TestCase {
    public function testCreateClass() {
      $this->assertInstanceOf(Aeronave::class, new Aeronave('BOING-737', '2022' , 25, ''));
    }

    public function testClassValues() {

      $aeronave = new Aeronave('BOING-737', '2022' , 25, '');
      $this->assertEquals($aeronave->getModelo(), 'BOING-737');
      $this->assertEquals($aeronave->getAnoFabricacao(), '2022');
      $this->assertEquals($aeronave->getNumeroAssentos(), 25);
    }
  }