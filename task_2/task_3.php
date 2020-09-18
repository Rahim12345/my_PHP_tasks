<?php
/**
 * @author Rahim Süleymanov
 * 
 * TASK 3. İki tarix arasındakı fərqi günlərlə göstərən funksiya.
 * 
 * This is the product of my brain))
 */

function gun_hesabla($date_1,$date_2)
{
    $date_1_second  = strtotime($date_1);
    $date_2_second  = strtotime($date_2);

    $day_difference = '';
    
    if($date_1_second!=$date_2_second)
    {
        $day_difference = ceil(abs($date_1_second - $date_2_second)/(24*60*60));
        $day_difference .= ' gün';
        // ceil() funksiyasından ona görə istifadə etdim ki,24 saat keçməsədə biz bu zaman fərqin 1 gün hesab edirik
    }
    else
    {
        $day_difference = 'Eyni tarixi daxil etmişsiniz';
    }
    return $day_difference;
}

echo "gun_hesabla('01-12-2020','31-12-2020') // ".gun_hesabla('01-12-2020','31-12-2020');

echo '<hr>ceil() in işlətməyimə səbəb <br/>';
echo "gun_hesabla('01-12-2020','30-12-2020 00:00:01') // ".gun_hesabla('01-12-2020','30-12-2020 00:00:01');
