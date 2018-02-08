<?php

class Vampire extends Monster
{
    private $victims;

    //Default constructor
    public function __construct($name)
    {
        $this->setName($name);
        $this->victims = 0;
    }
}