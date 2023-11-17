<?php
function mulTable()
{
    for ($i = 1; $i <= 5; $i++) {
        for ($j = $i; $j < 5  +1; $j++) {
            $mul =  $i * $j;
            echo ("{$i} * {$j}  =   { $mul}") . " <br>";
        }
        echo" <br>";
    }
}


mulTable();
