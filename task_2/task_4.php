<?php
/**
 * @author Rahim Süleymanov
 * 
 * TASK 4. (bu tapşırıq çox çətin gələrsə yazmaya bilərsiz) 
 * Funksiyaya 5 rəng və hər rəngin qarşısında çıxma ehtimalı 
 * faizlə qeyd olunan array verilir. Faizlərin toplamı 
 * 100 faiz olmalıdı. Funksiya təsadüfi olmaq şərti ilə o 5 rəngdən 
 * birini seçməlidi. Amma, hər dəfə funksiya işlədikcə rəngin seçilmə 
 * şansı onun faizindən asılı olmalıdı. Məsələn, deyək ki, 
 * funksiyaya aşağıdakı kimi array verilib.
 * 
 * $color = [
 *              'white'     =>45, //%
 *              'red'       =>15, //%
 *              'blue'      =>10, //%
 *              'green'     =>25, //%
 *              'yellow'    =>5   //%
 *          ];
 * 
 * Bu o deməkdir ki, funksiyanı çalışdırdıqda ağ rəngin çıxma ehtimalı 
 * 45 faiz, qırmızı rəngin 15 faiz, göy rəngin 10 faiz, 
 * yaşıl rəngin 25 faiz, sarı rəngin isə 5 faiz olmalıdı.
 * 
 * Qeyd: Nümunəyə biraz dəyişiklik etdim çünki,sualda 5 rəng deyir amma, 
 *       nümünə 4 rəng verilib
 * 
 * This is the product of my brain))
 * 
 */

function colors($colors)
{
    $white      = 0;
    $red        = 0;
    $blue       = 0; 
    $green      = 0; 
    $yellow     = 0; 

    $events     = [];
    
    $colorArr   = [];

    foreach($colors as $color=>$value)
    {
        $colorArr[] = $color;
    }

    
    while(count($events)!=100)
    {
        $random = rand(0,4);
        
        if($random == 0 && $white < $colors[$colorArr[0]])
        {
            $events[] = 'white';
            $white++;
        }
        elseif($random == 1 && $red < $colors[$colorArr[1]])
        {
            $events[] = 'red';
            $red++;
        }
        elseif($random == 2 && $blue < $colors[$colorArr[2]])
        {
            $events[] = 'blue';
            $blue++;
        }
        elseif($random == 3 && $green < $colors[$colorArr[3]])
        {
            $events[] = 'green';
            $green++;
        }
        elseif($random == 4 && $yellow < $colors[$colorArr[4]])
        {
            $events[] = 'yellow';
            $yellow++;
        }
        else
        {
            continue;
        }
    }
    // $cem = $white + $red + $blue + $green + $yellow;
    // $result = 'white - '.$white.'<br/>red - '.$red.'<br/>blue - '.$blue.'<br/>green - '.$green.'<br/>yellow - '.$yellow.'<br/>cem - '.$cem;
    return $events;
}

$colors =   [
                'white'     =>45,
                'red'       =>15,
                'blue'      =>10,
                'green'     =>25,
                'yellow'    =>5  
            ];

echo '<pre>';
print_r(colors($colors));
echo '</pre>';