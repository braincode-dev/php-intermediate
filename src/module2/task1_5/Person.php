<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/10/21
 * Time: 9:09 PM
 */

namespace CodeCamp\module2\task1_5;


class Person
{
    public $first_name, $last_name;

    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function get_full_name()
    {
        return mb_strtoupper($this->first_name.' '.$this->last_name);
    }
}

$person1 = new Person('Daniel', 'Robinson');
echo $person1->get_full_name();

$person2 = new Person('Emma', 'Vilson');
echo $person2->get_full_name();