<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/14/21
 * Time: 11:44 AM
 */

namespace CodeCamp\module2\task9;

//include '../../vendor/autoload.php';
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

class Child extends Person
{
    public $aspirations;

    public function __construct($name, $age, $gender, $aspirations)
    {
        parent::__construct($name, $age, $gender);
        $this->aspirations = $aspirations;
    }

    public function introduce()
    {
        return sprintf("Hi, I'm %s and I am %d years old", $this->name, $this->age);
    }

    public function greet($dd)
    {
        return sprintf("Hi %s, let's play!", $this->name);
    }

    public function say_dreams()
    {
        $aspirations = '';
        $count = count($this->aspirations);
        $last_key = array_key_last($this->aspirations);
        foreach ($this->aspirations as $key => $aspiration){

            if ($count < 2){
                $aspirations = $aspirations . $aspiration .' ';
            }else{
                if ($key == $last_key) {
                    $aspirations = $aspirations.' or ';
                }elseif($key !== 0){
                    $aspirations = $aspirations.', ';
                }
                $aspirations = $aspirations . $aspiration;
            }
        }

        return sprintf("I would like to be a(n) %s when I grow up.", $aspirations);
    }
}

$arr = [
    'job',
    'job1',
    'job2',
    'job3',
];
$ee = new Child('Name', 22, 'Dev', $arr);
echo $ee->say_dreams();