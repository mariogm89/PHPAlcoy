<?php

class Dog
{
    public $type;
    public $colour;
    private $age;

    public function __construct(
        $type,
        $colour,
        $age
    ){
        $this->type = $type;
        $this->colour = $colour;
        $this->age = $age;
    }
    function __toString()
    {
        return "Raza: $this->type <br> Color: $this->colour <br> Edad: $this->age años";
    }
}
?>