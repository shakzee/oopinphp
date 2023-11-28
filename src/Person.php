<?php

namespace MyApp;
class Person
{
    use LoggerTrait;
    private $name;
    private $age;
    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
        echo $this->name . 'is created. \n';
    }
    public function __toString()
    {
        return $this->name. ', ' . $this->age.'Years old.';
    }

    public function __destruct()
    {
        return $this->name.', '. $this->age . ' years old. \n';
    }
}