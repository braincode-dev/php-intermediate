<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/1/21
 * Time: 3:56 PM
 */

use PHPUnit\Framework\TestCase;
use CodeCamp\SampleClass;


class BinaryTreeTest extends TestCase
{
    /**
     * @dataProvider checkAllChildDataProvider
     */
    public function testCheckAllChild($input, $expected)
    {

        $result = (new SampleClass())->runTaskFirstOld($input);
        $this->assertEquals($expected, $result);
    }

    public function checkAllChildDataProvider()
    {
        return [
            [3, 359],
            [2, 2478],
            [1, 13592478],
            [7, 78],
        ];
    }
}