<?php

class ElephantController
{
    private $herd = [];

    public function addElephant(Elephant $elephant)
    {
        $this->herd[] = $elephant;
    }
    public function getElephants()
    {
        return $this->herd;
    }
}

$herd = new ElephantController();
$herd->addElephant($hathi);
var_dump($herd->getElephants());