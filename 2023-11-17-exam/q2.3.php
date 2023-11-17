<?php
function genNum($min, $max)
{
    if ($min > $max  or $min == $max) {
        return "please enter valid range";
    }
    return rand($min, $max);
}

echo genNum(561, 12515);
