<?php

class Monster
{
    protected $name;

    //Default Constructor
    public function __construct($name = "The monster")
    {
        $this->name = $name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function attack()
    {
        echo "$this->name is attacking!<br>";
    }
}