<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/14/21
 * Time: 7:35 PM
 */

$author = new class(){
    public $name = "Donald";
    public $age = 17;
    public $gender = "Male";
    public $occupation = "Computer Programmer";
};

$des = "An amazing PHP Kata Series, complete with 10 top-quality Kata containing a large number of both fixed and random tests, that teaches both the fundamentals of object-oriented programming in PHP (in the first 7 Kata of this Series) and more advanced OOP topics in PHP (in the last 3 Kata of this Series) such as interfaces, abstract classes and even anonymous classes in a way that stimulates critical thinking and encourages independent research";
$arr = [
    "Об'єктно-орієнтований PHP №1 - Класи, загальнодоступні властивості та методи",
    "Об'єктно-орієнтований PHP №2 - Конструктори класів і \$this",
    "Об’єктно-орієнтований PHP №3 – константи класу та статичні методи",
    "Об'єктно-орієнтований PHP №4 - Люди, люди, люди (практика)",
    "Об'єктно-орієнтований PHP № 5 - Класичне успадкування",
    "Об'єктно-орієнтований PHP №6 - Наочність",
    "Об'єктно-орієнтований PHP № 7 - ключове слово \"Final\".",
    "Об'єктно-орієнтований PHP № 8 - Інтерфейси [Розширений]",
    "Об'єктно-орієнтований PHP №9 - абстрактні класи [розширений]",
    "Об'єктно-орієнтований PHP №10 - Об'єкти на льоту [Розширений]",
];
$count = count($arr);

$object_oriented_php = new class($des, $arr, $count, $author){
    public $description;
    public $kata_list;
    public $kata_count;
    public $author;

    public function __construct($des, $arr, $count, $author)
    {
        $this->description = $des;
        $this->kata_list = $arr;
        $this->kata_count = $count;
        $this->author = $author;
    }

    public function advertise($name)
    {
        return sprintf("Hey %s, don't forget to check out this great PHP Kata Series authored by Donald called \"Object-Oriented PHP\"", $name);
    }

    public function get_kata_by_number($kata_number)
    {
        $kata_number = $kata_number - 1;
        foreach ($this->kata_list as $key => $lesson){
            if($kata_number == $key){
                return $lesson;
            }
        }
    }

    public function complete()
    {
        return sprintf("Hooray, I've finally completed the entire \"Object-Oriented PHP\" Kata Series!!!");
    }
};


