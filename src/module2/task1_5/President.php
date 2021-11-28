<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/10/21
 * Time: 8:59 PM
 */

namespace CodeCamp\module2\task1_5;


class President
{
    public $name = 'Barack Obama';

    public function greet($name)
    {
        return sprintf("Hello %s, my name is %s, nice to meet you!", $name, $this->name);
    }
}

$us_president = new President();
$president_name = $us_president;
$greetings_from_president = $us_president->greet('Donald');

echo $greetings_from_president;