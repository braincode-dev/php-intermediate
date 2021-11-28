<?php
/**
 * Created by PhpStorm.
 * User: alexkizyma
 * Date: 11/3/21
 * Time: 5:54 PM
 */

namespace CodeCamp\module1\TaskThird;


class Stack
{
    function total($object1, $object2, $object3, $count1, $count2, $count3)
    {
        $result1 = 0;
        $result2 = 0;
        $result3 = 0;

        for ($i = 0; $i < $count1; $i++)
            $result1 += $object1[$i];

        for ($i = 0; $i < $count2; $i++)
            $result2 += $object2[$i];

        for ($i = 0; $i < $count3; $i++)
            $result3 += $object3[$i];

        $top1 = 0;
        $top2 = 0;
        $top3 = 0;

        while (1) {

            if ($top1 == $count1 || $top2 == $count2 || $top3 == $count3)
                return 0;

            if ($result1 == $result2 && $result2 == $result3)
                return $result1;

            if ($result1 >= $result2 && $result1 >= $result3)
                $result1 -= $object1[$top1++];

            else if ($result2 >= $result1 && $result2 >= $result3)
                $result2 -= $object2[$top2++];

            else if ($result3 >= $result2 && $result3 >= $result1)
                $result3 -= $object3[$top3++];
        }
    }
}