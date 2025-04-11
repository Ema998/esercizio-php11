<?php
class Car {
  private $numTelaio;
  private $numTarga;

  public function __construct($numTelaio, $numTarga) {
    $this->numTelaio = $numTelaio;
    $this->numTarga = $numTarga;
    $this->printNumTelaio();
    $this->printNumTarga();
  }
  
  function getNumTelaio() {
    return $this->numTelaio;
  }

  function getNumTarga() {
    return $this->numTarga;
  }

  public function printNumTelaio() {
    echo $this->getNumTelaio();
  }

  public function printNumTarga() {
    echo  $this->getNumTarga();
  }
}

class Fiat extends Car {
  protected $name;

    public function __construct($numTelaio, $numTarga, $name) {
        parent::__construct($numTelaio, $numTarga);
        $this->name = $name;
  }

  public function printInfo() {
    echo "La mia macchina e' " . $this->name . ", con targa " . $this->printNumTarga() . " e numero di Telaio " . $this->printNumTelaio() . "<br>";   
  }
}

$myCar = new Fiat("1234", "ND 123 OJ", "Opel");


?>