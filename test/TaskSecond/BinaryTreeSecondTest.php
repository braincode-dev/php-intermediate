<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/1/21
 * Time: 3:56 PM
 */

use PHPUnit\Framework\TestCase;
use CodeCamp\TaskSecond\BinaryTree;


class BinaryTreeSecondTest extends TestCase
{
    public function testInorderTraversal()
    {
        $expected = '1 2 3 4 5 6';
        $tree = (new BinaryTree())->createTree();
        $arr = $tree->grabChildren($tree->root);
        $result = $tree->sortResult($arr);

        $this->assertEquals($expected, $result);
    }

}