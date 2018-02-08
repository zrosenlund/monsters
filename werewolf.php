<?php

class Werewolf extends Monster
{
    private $fullMoon;

    public function __construct($name)
    {
        $this->setName($name);
        $this->fullMoon = false;
    }

    function fullMoon()
    {
        $this->fullMoon = true;
    }

    function attack()
    {
        if($this->fullMoon == true)
        {
            echo "$this->name has transformed! You die now!<br>";
        }
        else{
            echo "Oh hey what's up $this->name?<br>";
        }
    }
}