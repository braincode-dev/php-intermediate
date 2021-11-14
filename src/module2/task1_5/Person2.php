<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/10/21
 * Time: 10:42 PM
 */

namespace CodeCamp\module2\task1_5;


class Person2
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

    public function describe_job()
    {
        return sprintf("I am currently working as a(n) %s", $this->occupation);
    }

    public static function greet_extraterrestrials($species)
    {
        return sprintf("Welcome to Planet Earth %s!", $species);
    }
}