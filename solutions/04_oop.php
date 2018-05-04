<?php

/*=================================
=            Book Class            =
=================================*/


class Book {
  private $title;
  public $author;

  public function __construct($title, $author) {
    $this->title = $title;
    $this->author = $author;
  }
  public function printTitle() {
    return "Titel: $this->title <br>";
  }
  public function getTitle() {
    return $this->title;
  }
  public function setTitle($titleName) {
    $this->title = $titleName;
  }
}
$book1 = new Book('The Dark Forest', 'Liu Cixin');

$book1->setTitle('Harry Potter');
echo "Titel: " . $book1->getTitle() . "<br>Författare: $book1->author <br>";

echo $book1->printTitle();


/*=================================
=            Car Class            =
=================================*/


class Car {
  private $model;
  private $color;
  private $price;
  private $sellDate;

  public function __construct($model, $color, $price, $sellDate = "2017-04-18") {
    $this->model = $model;
    $this->color = $color;
    $this->price = $price;
    $this->sellDate = "2017-03-27";
    // TODO: använd date(..)
  }
  public function printInfo() {
    echo "Det här är en $this->color $this->model "
    . "som kostar $this->price kr.<br>";
  }
  public function halfPrice() {
    $this->price = $this->price / 2;
  }
  public function changeCar($model, $color, $price) {
    $this->model = $model;
    $this->color = $color;
    $this->price = $price;
  }
}

$car1 = new Car('Tesla', 'silverfärgad', 1000000);
$car1->halfPrice();
$car1->changeCar('Fiat', 'blå', 80000);
$car1->printInfo();


/*===============================================
=            SingleBookLibrary Class            =
===============================================*/


class SingleBookLibrary {
  public $book;
  public $isBorrowed;

  public function borrow() {
    if( $this->isBorrowed ) {
      echo "Boken är redan utlånad.<br>";
    } else {
      echo "Boken var inte utlånad, det går bra att låna.<br>";
      $this->isBorrowed = true;
    }
  }
}
$library = new SingleBookLibrary();
$library->isBorrrowed = false;
$library->book = new Book('Pesten', 'Albert Camus');
  // Book har egenskaperna: title, author
$library->borrow();
$library->borrow();
$library->borrow();


/*=====================================
=            Product Class            =
=====================================*/


class Product {
  private $name;
  private $description;
  private $price;
  private $imageURL;
  private $quantity;
  public static $webshopName = "Kiosk Supreme";
  
  public function __construct($name, $description, $price=100, $imageURL='', $quantity=1) {
    $this->name        = $name;
    $this->description = $description;
    $this->price       = $price;
    $this->imageURL    = $imageURL;
    $this->quantity    = $quantity;
  }
  
  public function printProduct() {
    echo "Produkt namn: $this->name <br>" .
    "Beskrivning: $this->description <br>" .
    "Pris: $this->price <br>" .
    "Bild: $this->imageURL <br>" .
    "Antal: $this->quantity <br>" .
    "Säljs i: " . Product::$webshopName . " <br>";
  }
  
  public function getName() {
    return $this->name;
  }
  public function setName($newName) {
    $this->name = $newName;
  }
}

$item1 = new Product('Lakrits', 'Yuck', 25, 'img/lakrits.png', 2500);
$item1->setName('sötpotatis');
echo "Product name med echo: " . $item1->getName() . " <br>";
$item1->printProduct();

Product::$webshopName = 'Mr Butik';

$item2 = new Product('Gummianka', 'Bra på programmering');
$item2->printProduct();
$item1->printProduct();