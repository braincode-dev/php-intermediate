<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/14/21
 * Time: 11:12 AM
 */

namespace CodeCamp\module2\task8;


use CodeCamp\module2\task8\interfaces\CanGreet;
use CodeCamp\module2\task8\interfaces\CanSwim;

class Dog implements CanSwim, CanGreet
{
    public function swim()
    {
        return "I'm swimming, woof woof";
    }

    public function greet($name)
    {
        return sprintf("Hello %s, welcome to my home", $name);
    }

    public function bark()
    {
        return "Woof woof";
    }
}