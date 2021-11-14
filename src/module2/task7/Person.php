<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/14/21
 * Time: 10:11 AM
 */

namespace CodeCamp\module2\task7;


class Person
{
    const species = "Homo Sapiens";

    public $name, $age, $occupation;

    public function __construct($name, $age, $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function introduce()
    {
        return sprintf("Hello, my name is %s", $this->name);
    }

    final public function describe_job()
    {
        return sprintf("I am currently working as a(n) %s", $this->occupation);
    }

    final public static function greet_extraterrestrials($species)
    {
        return sprintf("Welcome to Planet Earth %s!", $species);
    }
}