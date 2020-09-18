<?php
header('Content-Type: text/html; charset=utf-8');	 
/**
 * @author Rahim Süleymanov
 * 
 * TASK 2. Azərbaycan dilində yazılmış istənilən sözdəki hecaların sayını tapan funksiya.
 */

function heca_sayi($text)
{
    $text       = mb_strtolower($text);
    $length 	= mb_strlen($text);
    $vowels 	= ['a','ı','o','u','e','ə','i','ö','ü'];
    $n = 0;
	$word2array = [];	
	
	for ($i = 0; $i < $length; $i++) 
	{
		if(in_array(mb_substr($text, $i, 1, 'UTF-8'),$vowels))
		{
			$n++;
		}
	}

    return $n;
}

$word1 = 'alma';
$word2 = 'narıncı';
$word3 = 'Adət-Ənənə';

echo 'heca_sayi('.$word1.'); //'.heca_sayi($word1).'<br/>';
echo 'heca_sayi('.$word2.'); //'.heca_sayi($word2).'<br/>';
echo 'heca_sayi('.$word3.'); //'.heca_sayi($word3).'<br/>';
