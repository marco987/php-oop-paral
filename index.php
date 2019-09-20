<?php

  class Parallelepipedo {

    public $x;
    public $y;
    public $z;

    public function __construct($x, $y, $z) {

      $this -> x = $x;
      $this -> y = $y;
      $this -> z = $z;
    }

    public function getArea() {

      $area = 2 * ($this -> x * $this -> y + $this -> x * $this -> z + $this -> y * $this -> z);
    }

    public function getVolume() {

      $volume = $this -> x * $this -> y * $this -> z;
    }
  };

  // $numero = rand(0,100);

?>
