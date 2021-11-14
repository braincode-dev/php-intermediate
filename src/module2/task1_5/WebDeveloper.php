<?php
namespace CodeCamp\module2\task1_5;

include '../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

class WebDeveloper extends ComputerProgrammer
{
    public function __construct($name, $age)
    {
        parent::__construct($name, $age, "Computer Programmer");
    }

    public function describe_job()
    {
        return parent::describe_job()." And don't forget to check on my website :D";
    }

    public function describe_website()
    {
        return sprintf("My professional %s website is made from HTML, CSS, Javascript and PHP!", $this->occupation);
    }
}

$test = new WebDeveloper('Man', 'Coby');
echo $test->describe_job();
echo $test->describe_website();