<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/1/21
 * Time: 8:23 PM
 */

namespace CodeCamp\module1\TaskSecond;


class BinaryTree
{
    public $root;
    public $children = [];

    public function __construct()
    {
        $this->root = null;
    }


    public function grabChildren($node): array
    {
        if (!$node) {
            return $this->children;
        }

        if (!empty($node->data)) {
            $this->children[] = $node->data;
        }

        $this->grabChildren($node->left);
        $this->grabChildren($node->right);

        return $this->children;
    }


    public static function createTree()
    {
        $tree = new BinaryTree();

         /* Створення бінарного дерева
        _____________________________

                 1
                  \
                   2
                    \
                     5
                    /  \
                   3    6
                    \
                     4
        _____________________________*/

        $tree->root = new Node(1);
        $tree->root->right = new Node(2);
        $tree->root->right->right = new Node(5);
        $tree->root->right->right->right = new Node(6);
        $tree->root->right->right->left = new Node(3);
        $tree->root->right->right->left->right = new Node(4);

        return $tree;
    }

    public function sortResult($arr)
    {
        sort($arr);

        $int = '';
        foreach ($arr as $key => $val) {
            $int = $int.$val.' ';
        }

        return trim($int);
    }
}