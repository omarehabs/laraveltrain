<?php
function checkYearIsLeap($year)
{
    // $year = (int) $year;
    if ($year % 4 == 0) {
        echo "year is leap";
    } else {

        echo "year is not leap";
    }
}
checkYearIsLeap(2015);
