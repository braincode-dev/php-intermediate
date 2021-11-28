<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/3/21
 * Time: 6:39 PM
 */

use PHPUnit\Framework\TestCase;
use CodeCamp\module1\TaskThird\Stack;

class StackTest extends TestCase
{
    /**
     * @dataProvider checkTotalDataProvider
     */
    public function testCheckTotal($arr1, $arr2, $arr3, $expected)
    {
        $count1 = sizeof($arr1);
        $count2 = sizeof($arr2);
        $count3 = sizeof($arr3);

        $result = (new Stack())->total($arr1, $arr2, $arr3, $count1, $count2, $count3);
        $this->assertEquals($expected, $result);
    }

    public function checkTotalDataProvider()
    {
        return [
            [[3, 2, 1, 1, 1], [4, 3, 2], [1, 1, 4, 1], 5],
            [[1, 2, 1, 1], [1, 1, 2], [1, 1], 2],
        ];
    }
}