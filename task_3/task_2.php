<?php
/**
 * @author Rahim Süleymanov
 * 
 * TASK 2. İstifadəçi şifrə yazır, sistem onu md5 halına çevirir. 
 * Amma, md5-də belə bir məsələ var ki, eyni sözlərin md5-i eyni olur. 
 * Bunu task1-dən də anlayırıq. Ona görə də elə etmək lazımdır ki, 
 * bu funksiya geriyə heç vaxt eyni md5 qaytarmasın. Məsələn, 
 * sistemdə 1000 istifadəçi var, onların şifrələrini bazada saxlayırıq. 
 * 500 nəfərin şifrəsi eyni olduğundan, hacker bazaya daxil olarsa, 
 * 500 eyni md5 görəcək, və biləcək ki, hamısının şifrəsi eynidir. 
 * Bir şifrəni qırmaqla, 499 istifadəçinin də şifrəsini qırmış olacaq. 
 * Ona görə də biz elə etməliyik ki, eyni şifrələr belə hər saniyə fərqli md5 qaytarsın geriyə.
 * 
 */

function bazaya_yaz($password)
{
    include 'config.php';
    $new_pasword = md5($password.strtotime("now"));
    $save = $conn->prepare("INSERT INTO task_2(`password`) VALUES (?)");
    $save->execute([$new_pasword]);
    $result = 'Şifrə uğurla bazaya yazdırıldı';

    return $result;
}

echo bazaya_yaz('salam1');