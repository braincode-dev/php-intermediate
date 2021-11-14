<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/14/21
 * Time: 10:11 AM
 */

namespace CodeCamp\module2\task6;


class Person
{
    protected $name, $age, $occupation;

    public function __construct($name, $age, $occupation)
    {
        if (!is_string($name)) {
            throw new \InvalidArgumentException("Name must be a string!");
        }

        if (!is_int($age)) {
            throw new \InvalidArgumentException("Age must be a non-negative integer!");
        }

        if (!is_string($occupation)) {
            throw new \InvalidArgumentException("Occupation must be a string!");
        }

        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_age()
    {
        return $this->age;
    }

    public function get_occupation()
    {
        return $this->occupation;
    }

    public function set_name($name)
    {
        if (!is_string($name)) {
            throw new \InvalidArgumentException("Name must be a string!");
        }
        $this->name = $name;
    }

    public function set_age($age)
    {
        if (!is_int($age)) {
            throw new \InvalidArgumentException("Age must be a non-negative integer!");
        }
        $this->age = $age;
    }

    public function set_occupation($occupation)
    {
        if (!is_string($occupation)) {
            throw new \InvalidArgumentException("Occupation must be a string!");
        }
        $this->occupation = $occupation;
    }
}