<?php

    require("monster.php");
    require("vampire.php");
    require("werewolf.php");

    $monster = new Monster();
    $monster->attack();
    $monster->setName("Mason");
    $monster->attack();

    $vampire = new Vampire("Count Chocula");
    $vampire->attack();

    $werewolf = new Werewolf("Steve");
    $werewolf->attack();
    $werewolf->fullMoon();
    $werewolf->attack();
