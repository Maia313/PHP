<?php

interface ControllerInterface
{
    public function add();
    public function getAll();
}

class ElephantController implements Controller
{
    // property
    private $herd = [];

    // method
    public function add(Elephant $elephant)
    {
        $this->herd[] = $elephant;
    }

    public function getAll()
    {
        return $this->herd;
    }
}

class CatController implements Controller
{
    public function add()
    {
    }
    public function getAll()
    {
    }
}