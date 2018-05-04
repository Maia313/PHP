<?php


/*====================================
=            Animal Class            =
====================================*/

abstract class Animal 
{
  protected $eyeCount;
  abstract public function printAnimal();
}

class Mammal extends Animal 
{
  protected $liveBabies;
  public function printAnimal() {
    echo "Här är ett däggdjur <br>";
  }
}

class Bear extends Mammal 
{
  public $furColor;
}

abstract class Fish extends Animal 
{
  protected $habitat;
  public function __construct() {
    $this->habitat = 'underwater';
  }
}

class Tuna extends Fish {
  public $isPredator = true;
  public $waterType = 'salt';

  public function printAnimal() {
    echo "Här är en tonfisk. Den finns $this->habitat <br>";
  }
}


$bear = new Bear();
$tuna = new Tuna();
$bear->printAnimal();
$tuna->printAnimal();



/*====================================
=            Planet Class            =
====================================*/

//Example of how you can call the parent class from the sub class

class Planet {
  protected $name;
  protected $orbitDays;

  public function __construct($name, $orbitDays) {
    $this->name = $name;
    $this->orbitDays = $orbitDays;
  }
  public function visit() {
    echo "Välkommen till $this->name! Ett varv runt solen tar $this->orbitDays. <br>";
  }
}

class Jorden extends Planet {
  protected $population;

  public function __construct($population) {
    parent::__construct('Jorden', 365.25); //calling parent constructor
    $this->population = $population;
  }
  public function visit() {
    parent::visit();
    echo "Befolkning: $this->population miljarder.<br>";
  }
}

$mars = new Planet('Mars', 687);
$jorden = new Jorden(7.5);

$mars->visit();
$jorden->visit();