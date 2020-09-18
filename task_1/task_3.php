<?php

/**
 * @author Rahim Süleymanov
 * 
 * TASK 3. Azərbaycan dilində yazılmış sözləri URL üçün uyğun hala gətirən funksiya. 
 * URL azərbaycanca yazılmış hərfləri, boşluq simvollarını və sairə dəstəkləmədiyi 
 * üçün onları uyğun hala gətirmək lazım olur. Funksiya ə, ı, ş, ü və s. kimi 
 * hərfləri ingilis alternativləri (e, i, u, s, … ) ilə əvəzləməlidir. 
 * Boşluqları isə altxətlə ( _ ). Tire (-) xaric digər bütün simvollar silinməlidir.
 */


function az_to_url($text) 
{
    $find 		= ['Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', 'Ə', 'ə', 'I'];
    $replace 	= ['c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'i', 'e', 'e'];

    // Yuxarıdakıları uyğun olaraq birini digərinə çevirdim
    $text = strtolower(str_replace($find, $replace, $text));

    // Hərflərdən və rəqəmlərdən başqa bütün işarələri boşluqla əvəz etdim
    $text = preg_replace("@[^A-Za-z0-9\-_]@i", ' ', $text);

    // Birdən artıq boşluğu bir boşluqla əvəz edir
    $text = trim(preg_replace('/\s+/', ' ', $text));

    // Boşluqları _ ilə əvəz etdim
    $text = str_replace(' ', '_', $text);

    // Başda - işarəsi varsa silir
    $text = preg_replace('/^-/','',$text);

    return $text;
}



echo "az_to_url('Dünyada qlobal istiləşmə gedir.'); //".az_to_url('Dünyada qlobal istiləşmə gedir.').'<br/>';

echo "az_to_url('Yavaş-yavaş hər şey qaydasına düşür!'); //".az_to_url('Yavaş-yavaş hər şey qaydasına düşür!').'<br/>';

echo "az_to_url('Dünya müharibəsi 1938-ci ildə başlamışdır.'); //".az_to_url('Dünya müharibəsi 1938-ci ildə başlamışdır.').'<br/>';

// Mümkünsə sondakı - işarəsini silməyi deyərdiz