<?php

/**
 * @author Rahim Süleymanov
 * 
 * TASK 1. İç-içə ( n sayda ) array elementlərini düz array halına salan funksiya. 
 * Düz array - içində başqa heç bir array olmayan array-a deyilir.
 */

$multidimensional =
    [
        'heyvanlar',
        [
            'meyveler',
            [
                'gilemeyveler',
                'insanlar'
            ],
            [
                'terevezler',
                [
                    'agaclar',
                    'bitkiler'
                ]
            ]
        ]
    ];

function multidimensional2single($array)
{
    $single_dimensional_array = [];
    foreach ($array as $item) 
    {
        if (is_array($item)) 
        {
            $single_dimensional_array = array_merge($single_dimensional_array, multidimensional2single($item));
        } 
        else 
        {
            $single_dimensional_array[] = $item;
        }
    }

    return $single_dimensional_array;
}

print_r(multidimensional2single($multidimensional));
