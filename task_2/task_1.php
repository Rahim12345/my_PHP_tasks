<?php
/**
 * @author Rahim Süleymanov
 * 
 * TASK 1. Heç bir sort ( sort, rsort, asort, ksort, arsort, krsort ) 
 * funksiyasından istifadə etmədən, array içindəki ədədləri kiçikdən 
 * böyüyə ardıcıllıqla düzən funksiya.
 * 
 * Useful link below
 * https://stackoverflow.com/questions/12409040/sorting-array-value-without-using-built-in-php-like-sort-etc
 */



$array = [4,9,1,5,4,10,2];

function sorter($array)
{
    for($j = 0; $j < count($array); $j ++) 
    {
        for($i = 0; $i < count($array)-1; $i ++)
        {
            if($array[$i] > $array[$i+1]) 
            {
                $helper_variable = $array[$i+1];// İki dəyişənin dəyərini dəyişmək məntiqi
                $array[$i+1]=$array[$i];
                $array[$i]=$helper_variable;
            }       
        }
    }
    return implode(',',$array);
}

echo    '//input array <br/>';
echo    '['.implode(',',$array).']';

echo    '<br/>//output array <br/>';
echo    '['.sorter($array).']';
