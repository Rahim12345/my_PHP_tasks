<?php

/**
 * @author Rahim Süleymanov
 * 
 * TASK 6. X və Y verilir. X ədəddir (1-dən sonsuza qədər istənilən ədəd ola bilər), 
 * Y isə rəqəmdir (1-dən 10-a qədər istənilən rəqəm ola bilər). 
 * Funksiya 0-dan X-ə qədər olan bütün ədədlərdə istifadə olunan Y-ləri hesablamalıdı.
 */

function counter($x,$y)
{
    $result = '';
    $n      = 0;    
    for($i = 0;$i < $x;$i++)
    {
        if($i<$x-1)
        {
            if(in_array($y,str_split($i)))
            {
                $result .='<u><b>'.$i.'</b></u> , ';
                $n++;
            }
            else
            {
                $result .=$i.' , ';
            }
        }
        else
        {
            if(in_array($y,str_split($i)))
            {
                $result .='<u><b>'.$i.'</b></u>';
                $n++;
            }
            else
            {
                $result .= $i;
            }
        }

        
    }
    $result = 'X = '.$x.'<br/>Y = '.$y.'<br/>'.$result.'->'.$y.' rəqəmi '.$n.' dəfə istifadə olunub.';
    return $result;
}

echo counter(25,1);
