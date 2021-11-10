<?php

namespace CodeCamp;

use CodeCamp\TaskFirstOld\Node;
use CodeCamp\TaskFirstOld\BinaryTree;

class SampleClass
{
    public function getHelloWorld()
    {
        return "Hello World";
    }

    public function createTree()
    {
        /* Створення бінарного дерева
        _____________________________

                      1
                     /  \
                    3    2
                   /    /  \
                  5    4    7
                   \       /
                    9     8
        _____________________________*/

        $tree = new Node(1);
        $tree->left = new Node(3);
        $tree->left->left = new Node(5);
        $tree->left->left->right = new Node(9);

        $tree->right = new Node(2);
        $tree->right->right = new Node(7);
        $tree->right->left = new Node(4);
        $tree->right->right->left = new Node(8);

        return $tree;
    }

    public function runTaskFirstOld($x)
    {
        $main = new BinaryTree($this->createTree());
        $arr = $main->findChildren($x);
        $int = '';
        foreach ($arr as $key => $val) {
            $int = $int.$val;
        }

        return $int;
    }


}