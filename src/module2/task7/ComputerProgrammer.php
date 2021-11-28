<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/14/21
 * Time: 10:33 AM
 */

namespace CodeCamp\module2\task7;

//include '../../vendor/autoload.php';
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

class ComputerProgrammer extends Person
{
    public function introduce()
    {
        return parent::introduce(). sprintf("and I am a %s", $this->occupation);
    }

}

$test = new ComputerProgrammer('Name', 22, 'Dev');
echo $test->introduce();