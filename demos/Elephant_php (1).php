<?php
class Animal
{
    protected $name;
    protected $isAlive = true;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function speak()
    {
        echo "I change shapes just to hide in this place";
    }

    public function eat()
    {
        echo "Nom nom";
    }
}

class Elephant extends Animal
{
    protected $tusks = true;
    // Override method

    public function speak()
    {
        echo "tut tut elephanty!!<br/>";
        parent::speak();
    }
    public function getIsAlive()
    {
        return $this->isAlive;
    }
}

$an_elephant = new Elephant("Hathi");
$an_elephant->speak();