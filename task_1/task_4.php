<?php

/**
 * @author Rahim Süleymanov
 * 
 * TASK 4. Array-də verilmiş n sayda ədədlərin ədədi ortasını tapan funksiya. 
 * Funksiyada hər hansı hazır PHP funksiyası istifadə etmək olmaz. (array_sum, array_diff və s. olmaz)
 */


function numerical_average($array)
{
    $sum = 0;
    $n   = 0;
    foreach($array as $number)
    {
        $n++;
        $sum +=$number;
    }

    return $sum/$n;
}

echo '[10,20,30] //'.numerical_average([10,20,30]).'<br/>';
echo '[3,5,10,2] //'.numerical_average([3,5,10,2]).'<br/>';
