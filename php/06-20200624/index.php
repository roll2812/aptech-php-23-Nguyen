<?php

class Fruit {
    //Properties
    public $name;
    public $color;

    //Methods

    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }
};

$apple = new Fruit();
$apple->setName('Apple');
echo $apple->getName() . "<br>";
$banana = new Fruit();
$banana->setName('Banana');
echo $banana->getName();


