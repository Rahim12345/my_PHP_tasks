<?php
/**
 * @author Rahim Süleymanov
 * 
 * TASK 1. Məlumatları şifrələmək üçün müxtəlif metodlar olur, 
 * onlara kriptoqrafiya metodları deyilir. PHP-da belə metodlara md5, 
 * sha1 daxildi. Baxmayaraq ki, bu metodların istifadəsi məsləhət deyil, 
 * yenə də bəzi hallarda istifadə olunmasında heç bir problem yoxdur. 
 * Bu taskda da md5() funksiyasından istifadə etməyinizə ehtiyac olacaq. 
 * Task belədir: İstifadəçi şifrəsini yazacaq, funksiya həmin şifrəni md5-ə 
 * çevirib bir fayla əlavə edəcək. Bütün istifadəçilərin şifrəsi 
 * bir faylda toplanmalıdır. Amma, əsas məsələ budur, deyək ki, 
 * A istifadəçisi şifrəsini “salam1” qoyub, B istifadəçisi də “salam1” yazarsa, 
 * sistem həmin şifrəni fayla əlavə etməyəcək və istifadəçiyə şifrəni dəyişməli olduğu bildirəcək.
 * 
 */

function pass_ad($password)
{
    $result = '';

    $new_password = md5($password);

    if(file_exists('password.txt'))
    {
        $passwords = explode(';',file_get_contents('password.txt'));

        $exist_password = 0;
        for($i=0;$i<count($passwords)-1;$i++)
        {
            if($new_password == $passwords[$i])
            {
                $exist_password++;
            }
        }

        if($exist_password !=0)
        {
            $result = 'Bu şifrədən istifadə edilib,lütfən bir başqasını cəhd edin';
        }
        else
        {
            fwrite(fopen('password.txt','a+'),$new_password.';');
            $result = 'Şifrə uğurla əlavə edildi';
        }

    }
    else
    {
        fwrite(fopen('password.txt','a+'),$new_password.';');
        $result = 'Şifrə uğurla əlavə edildi';
    }
     
    return $result;
}

echo pass_ad('12345');