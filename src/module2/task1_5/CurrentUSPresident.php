<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/10/21
 * Time: 10:29 PM
 */

namespace CodeCamp\module2\task1_5;


class CurrentUSPresident
{
    const NAME = 'Barack Obama';

    public static function greet($name)
    {
        return sprintf('Hello %s, my name is %s, nice to meet you!', $name, self::NAME);
    }
}

echo CurrentUSPresident::greet('Dom');