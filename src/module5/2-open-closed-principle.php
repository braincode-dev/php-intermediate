<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/28/21
 * Time: 8:57 PM
 */

class Programmer
{
    public function code()
    {
        return 'coding';
    }
}

class Tester
{
    public function test()
    {
        return 'testing';
    }
}

class ProjectManagement
{
    public function process($member)
    {
        if ($member instanceof Programmer) {
            $member->code();
        } elseif ($member instanceof Tester) {
            $member->test();
        };

        throw new Exception('Invalid input member');
    }
}


// Refactored

interface Workable
{
    public function work();
}

class Programmer implements Workable
{
    public function work()
    {
        return 'coding';
    }
}

class Tester implements Workable
{
    public function work()
    {
        return 'testing';
    }
}

class ProjectManagement
{
    public function process(Workable $member)
    {
        return $member->work();
    }
}

