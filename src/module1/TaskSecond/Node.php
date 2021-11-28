<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/1/21
 * Time: 8:21 PM
 */

namespace CodeCamp\module1\TaskSecond;


class Node
{
    public ?Node $left;
    public ?Node $right;
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}