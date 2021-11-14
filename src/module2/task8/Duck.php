<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/14/21
 * Time: 11:02 AM
 */

namespace CodeCamp\module2\task8;


use CodeCamp\module2\task8\interfaces\CanFly;
use CodeCamp\module2\task8\interfaces\CanSwim;

class Duck extends Bird implements CanFly, CanSwim
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function chirp()
    {
        return "Quack quack";
    }

    public function swim()
    {
        return "Splash! I'm swimming";
    }
}