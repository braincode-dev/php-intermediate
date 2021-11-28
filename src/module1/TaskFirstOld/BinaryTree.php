<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 10/31/21
 * Time: 9:56 PM
 */

namespace CodeCamp\module1\TaskFirstOld;


// Cпочатку я зрозумів не вірно суть завдання і постатив час на ось це....
// В даному класі ми вводимо одну цифру, та отримуємо список усіх її нащадків

class BinaryTree
{
    public $root;
    public $children = [];

    public function __construct(Node $root)
    {
        $this->root = $root;
    }

    public function findChildren($x): array
    {
        $node = $this->findNode($x);
        return $this->grabChildren($node);
    }

    public function findNode(int $value): ?Node
    {
        if ($this->root->data === $value) {
            return $this->root;
        }

        return $this->findSubNode($this->root, $value, true);
    }

    private function findSubNode(?Node $node, int $value, bool $isRoot): ?Node
    {
        if (!$node) {
            return null;
        }

        if (!$isRoot && $node->data === $value) {
            return $node;
        }

        $right = $this->findSubNode($node->right, $value, false);
        if ($right) {
            return $right;
        }

        return $this->findSubNode($node->left, $value, false);
    }

    private function grabChildren($node): array
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
}