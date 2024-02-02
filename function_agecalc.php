<?php

/* 
Age calculator function by Niall Davies 2024.

Usage

AgeCalculator(Date,Month,Year);

Will return current age based on the birthday provided.

*/

Function AgeCalculator($d,$m,$y) {
    
    $currentdate = date("d");
    $currentmonth = date("m");
    $currentyear = date("Y");
    
    $age = $currentyear - $y;
    
    if ($currentmonth < $m) {
        $age = $age-1;
    }
    if ($currentmonth == $m) {
        if ($currentdate < $d) {
            $age = $age-1;
        }
    }
    
    return $age;
}

?>
