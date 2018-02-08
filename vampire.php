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

    function attack()
    {
        echo "$this->name will suck your blooooood!<br>";
        $this->victims++;
    }
}