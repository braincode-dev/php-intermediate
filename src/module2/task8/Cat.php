<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/14/21
 * Time: 11:09 AM
 */

namespace CodeCamp\module2\task8;


use CodeCamp\module2\task8\interfaces\CanClimb;

class Cat implements CanClimb
{
    public function climb()
    {
        return "Look, I'm climbing a tree";
    }

    public function meow()
    {
        return "Meow meow";
    }

    public function play($name)
    {
        return sprintf("Hey %s, let's play!", $name);
    }
}