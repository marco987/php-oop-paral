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
      return $area;
    }

    public function getVolume() {

      $volume = $this -> x * $this -> y * $this -> z;
      return $volume;
    }
  };

  $x1 = rand(0,100);
  $y1 = rand(0,100);
  $z1 = rand(0,100);
  $x2 = rand(0,100);
  $y2 = rand(0,100);
  $z2 = rand(0,100);
  $x3 = rand(0,100);
  $y3 = rand(0,100);
  $z3 = rand(0,100);

  echo "Dimensioni PARALLELEPIPEDO-1 >>> || x= " . $x1 . " || y= " . $y1 . " || z= " . $z1 . " ||<br>";
  echo "Dimensioni PARALLELEPIPEDO-2 >>> || x= " . $x2 . " || y= " . $y2 . " || z= " . $z2 . " ||<br>";
  echo "Dimensioni PARALLELEPIPEDO-3 >>> || x= " . $x3 . " || y= " . $y3 . " || z= " . $z3 . " ||<br><br>";

  $parallelepipedi = [
    new Parallelepipedo($x1, $y1, $z1),
    new Parallelepipedo($x2, $y2, $z2),
    new Parallelepipedo($x3, $y3, $z3)
  ];

  foreach ($parallelepipedi as $parallelepipedo) {
    echo "Volume Parallelepipedo: " . $parallelepipedo -> getVolume() . "<br>";
    echo "Area Parallelepipedo: " . $parallelepipedo -> getArea() . "<br><br>";
  };

?>
