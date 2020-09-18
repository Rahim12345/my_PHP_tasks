<?php
/**
 * @author Rahim Süleymanov
 * 
 * TASK 2. Array_unique istifadə etmədən, array daxilindəki təkrar ədədləri silən funksiya.
 * 
 * This is the product of my brain))
 */

$array = [4,9,1,5,4,10,2,9,1];

function no_repeat($array)
{
    $new_array = [];
    foreach($array as $item)
    {
        if(!in_array($item,$new_array))
        {
            $new_array[] = $item;
        }
    }
    return $new_array;
}

echo    '//input array <br/>';
echo '['.implode(',',$array).']';

echo    '<br/>//output array <br/>';
echo '['.implode(',',no_repeat($array)).']';
