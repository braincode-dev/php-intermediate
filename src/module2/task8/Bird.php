<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/14/21
 * Time: 10:57 AM
 */

namespace CodeCamp\module2\task8;

use CodeCamp\module2\task8\interfaces\CanFly;


class Bird implements CanFly
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function fly()
    {
        return "I am flying";
    }

    public function chirp()
    {
        return "Chirp chirp";
    }
}