<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/1/21
 * Time: 8:23 PM
 */

namespace CodeCamp\TaskFirst;


class BinaryTree
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function findNode($node, $val)
    {
        if (!is_null($node)) {
            if ($node->data == $val) {
                return true;
            } else {
                return ($this->findNode($node->left, $val) ||
                    $this->findNode($node->right, $val));
            }
        }
        return false;
    }

    public function lca($node, $x, $y)
    {
        if (!is_null($node)) {
            if ($node->data == $x || $node->data == $y) {
                return $node;
            }

            $first = $this->lca($node->left, $x, $y);
            $second = $this->lca($node->right, $x, $y);
            if (!is_null($first) && !is_null($second)) {
                return $node;
            }
            if (!is_null($first)) {
                return $first;
            }
            return $second;
        } else {
            return null;
        }
    }

    public function findLCA($x, $y)
    {
        $a = $this->findNode($this->root, $x);
        $b = $this->findNode($this->root, $y);
        if ($a && $b) {
            $result = $this->lca($this->root, $x, $y);
            if (!is_null($result)) {
                return $result->data;
            } else {
                throw new \Exception("Пусто!");
            }
        } else if ($a == true) {
            throw new \Exception("Значення вузла $y відсутнє");
        } else if ($b == true) {
            throw new \Exception("Значення вузла $x відсутнє");
        } else {
            throw new \Exception("Пара відсутня");
        }
    }

    public static function createTree()
    {
        $tree = new BinaryTree();

         /* Створення бінарного дерева
        _____________________________

                  2
                 /  \
                1    3
                    /  \
                   4    5
                         \
                          6
        _____________________________*/

        $tree->root = new Node(2);
        $tree->root->left = new Node(1);
        $tree->root->right = new Node(3);
        $tree->root->right->left = new Node(4);
        $tree->root->right->right = new Node(5);
        $tree->root->right->right->right = new Node(6);

        return $tree;
    }
}