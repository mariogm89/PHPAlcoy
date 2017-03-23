<?php

namespace APP\user;

class Cat
{
    public $name;
    public $surname;

    public function __construct(
        $name,
        $surname
    ){
        $this->name = $name;
        $this->surname = $surname;
    }
    function __toString()
    {
        return "Nombre mascota: $this->name $this->surname";
    }
}
?>