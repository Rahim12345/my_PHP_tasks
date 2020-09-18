<?php

/**
 * @author Rahim Süleymanov
 * 
 * TASK 5. Azərbaycan dilində yazılmış sözü tərsinə çevirən funksiya.
 */

function vice_versa($text)
{
    $length 	    = mb_strlen($text);

    $new_text       = '';

    $new_text_array =[];

    for ($i = $length - 1; $i >= 0; $i--) 
	{
    	$new_text_array[] = mb_substr($text, $i, 1, 'UTF-8');
	}
    foreach($new_text_array as $letter)
    {
        $new_text .= $letter;
    }
    return $new_text;
}

echo "Nərdivan //".vice_versa("Nərdivan")."<br/>";
echo "gələcək //".vice_versa("gələcək")."<br/>";
