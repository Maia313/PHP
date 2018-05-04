<?php

interface CanJumpInterface
{
    public function jump();
    public function jumpHigh();
}

interface MultiplyInterface
{
    public function multiplyNumbersReallyEasySoEasy();
}

abstract class Animal
{
    protected $name;
    protected $isAlive = true;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function speak()
    {
        echo "Speak";
    }
    abstract public function eat();
}

class Elephant extends Animal implements CanJumpInterface, MultiplyInterface
{
    protected $tusks = true;
    // Override method

    public function speak()
    {
        echo "tut tut elephanty!!<br/>";
    }
    public function getIsAlive()
    {
        return $this->isAlive;
    }
    public function eat()
    {
        echo "NOM NOM!!!!!!";
    }
    public function jump()
    {
    }
    public function jumpHigh()
    {
    }
    public function multiplyNumbersReallyEasySoEasy()
    {
    }
}

$an_elephant = new Elephant("Hathi");
$an_elephant->speak();