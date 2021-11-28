<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/1/21
 * Time: 3:56 PM
 */

use PHPUnit\Framework\TestCase;
use CodeCamp\module1\TaskFirst\BinaryTree;


class BinaryTreeFirstTest extends TestCase
{
    /**
     * @dataProvider lowestCommonAncestorDataProvider
     */
    public function testLowestCommonAncestor($x, $y, $expected)
    {
        $tree = (new BinaryTree())->createTree();
        $result = $tree->findLCA($x, $y);

        $this->assertEquals($expected, $result);
    }

    public function lowestCommonAncestorDataProvider()
    {
        return [
            [1, 3, 2],
            [1, 4, 2],
            [1, 5, 2],
            [1, 6, 2],
            [4, 5, 3],
            [4, 6, 3],
        ];
    }
}