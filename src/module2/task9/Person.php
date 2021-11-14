<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/14/21
 * Time: 11:37 AM
 */

namespace CodeCamp\module2\task9;


abstract class Person
{
    public $name, $age, $gender;

    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    abstract public function introduce();

    public function greet($name)
    {
        return sprintf("Hello %s", $name);
    }
}