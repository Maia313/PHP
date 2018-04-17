<?php

class Elephant
{
    private $name;
    private $age;
    private $livesInJungle;

    public function __construct($newName, $newAge)
    {
        $this->name = $newName;
        $this->age = $newAge;
        $this->livesInJungle = true;
    }

    public function speak()
    {
        echo "I am " . $this->name;
    }

    public function setName($newName)
    {
        if (is_null($newName)) {
            return "Aja baja";
        } else {
            $this->name = $newName;
        }
    }
}

$hathi = new Elephant("Hathi", 500);
$mowgli = new Elephant("Mowgli", 5);
$hathi->speak();
$hathi->setName("Ellie");