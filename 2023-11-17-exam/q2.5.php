<?php
function removeDuplicatesFromSortedArr($sortedArr)
{

    // return array_unique($sortedArr);
    $arr = array();
    foreach ($sortedArr as $el) {
        if (count($arr) == 0) {
            $arr[] = $el;
        }
        if (count($arr) > 0) {
            if ($arr[count($arr) - 1] != $el) {
                $arr[] = $el;
            }
        }
    }
    return $arr;
}
$sortedArr = [1, 2, 3, 3, 3, 5, 8, 8, 9, 10];
print_r(removeDuplicatesFromSortedArr($sortedArr));
