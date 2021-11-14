<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/10/21
 * Time: 11:09 PM
 */

namespace CodeCamp\module2\task1_5;


class Salesman extends Person2
{
    public function __construct($name, $age)
    {
        parent::__construct($name, $age, "Salesman");
    }

    public function introduce()
    {
        return parent::introduce().", don't forget to check out my products!";
    }
}