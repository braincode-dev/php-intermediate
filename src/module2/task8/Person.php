<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/14/21
 * Time: 11:15 AM
 */

namespace CodeCamp\module2\task8;


use CodeCamp\module2\task8\interfaces\CanGreet;
use CodeCamp\module2\task8\interfaces\CanIntroduce;

class Person implements CanGreet, CanIntroduce
{
    public $name, $age, $occupation;

    public function __construct($name, $age, $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function greet($name)
    {
        return sprintf("Hello %s, how are you?", $name);
    }

    public function speak()
    {
        return "What am I supposed to say again?";
    }

    public function introduce()
    {
        return sprintf("Hello, my name is %s, I am %d years old and I am currently working as a(n) %s", $this->name, $this->age, $this->occupation);
    }
}