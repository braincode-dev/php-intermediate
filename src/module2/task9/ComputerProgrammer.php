<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/14/21
 * Time: 5:29 PM
 */

namespace CodeCamp\module2\task9;


class ComputerProgrammer extends Person
{
    public $occupation = "Computer Programmer";

    public function __construct($name, $age, $gender)
    {
        parent::__construct($name, $age, $gender);
    }

    public function introduce()
    {
        return sprintf("Hello, my name is %s, I am %d years old and I am a(n) %s", $this->name, $this->age, $this->occupation);
    }

    public function greet($name)
    {
        return sprintf("Hello %s, I'm %s, nice to meet you", $name, $this->name);
    }

    public function advertise()
    {
        return "Don't forget to check out my coding projects";
    }
}