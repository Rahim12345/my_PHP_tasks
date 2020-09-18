<?php
/**
 * @author Rahim Süleymanov
 * 
 * TASK 5. Ədədin mürəkkəb, yoxsa sadə olduğunu deyən funksiya. 
 * Sadə ədəd yalnız 1ə və özünə qalıqsız bölünən ədədə deyilir. 
 * Mürəkkəb ədəd isə həm 1ə, həm özünə, həm də digər ədədlərə bölünə bilir.
 * 
 * This is the product of my brain))
 * 
 */

function murekkeb_sade($number)
{
    $helper_variable = '';
    for($i=1;$i<=$number/2;$i++)
    {
        if($number%$i ==0)
        {
            $helper_variable++;
        }
    }

    $helper_variable++;
    /**
     * Dövrdən sonra 1-i ona görə əlavə etdim ki,yuxarda ədədi yarsına kimi 
     * bölənlərin axtarmışam .Çünki ədədin yarsında sonra böləni anacaq özüdür
     */
    


    if($helper_variable ==1)
    {
        $output = '1 nə sadə nə də mürəkkəb ədəddir';
    }
    elseif($helper_variable ==2)
    {
        $output = $number.' sadə ədəddir';
    }
    else
    {
        $output = $number.' mürəkkəb ədəddir';
    }

    return $output;
}


for($i=1;$i<20;$i++)
{
    echo murekkeb_sade($i).'<br/>';
}

