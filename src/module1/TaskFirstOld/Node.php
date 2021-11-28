<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 10/31/21
 * Time: 9:54 PM
 */

namespace CodeCamp\module1\TaskFirstOld;


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