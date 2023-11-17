<?php
function fib($numOfSeries)
{
    $fib = [0, 1];
    if ($numOfSeries < 1) return "can not have less than a single series";
    if ($numOfSeries == 1) return [0];
    if ($numOfSeries == 2) return $fib;

    for ($i = 2; $i < $numOfSeries ; $i++) {
        echo $i;
        $last = $fib[$i - 1] ;
        $before_last = $fib[$i - 2] ;
        array_push($fib,  $last + $before_last);
    }
    return $fib;
}

print_r(fib(10));
