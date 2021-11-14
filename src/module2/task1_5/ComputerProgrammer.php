<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/10/21
 * Time: 11:09 PM
 */

namespace CodeCamp\module2\task1_5;


class ComputerProgrammer extends Person2
{
    public function __construct($name, $age)
    {
        parent::__construct($name, $age, "Computer Programmer");
    }

    public function describe_job()
    {
        return parent::describe_job().", don't forget to check out my Codewars account ;)";
    }
}