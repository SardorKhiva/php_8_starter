<?php

// LESSON5 20:34
echo "<pre>";
/**
 * Ko'p o\lchamli massivlar
 */

$todo = [
    "dushanba" => [
        'Xonalarni tartiblash',
        'Bozorga borish'
    ],

    "seshanba" => [
        'Buvimlarnikiga borish',
        'Magazinga borish'
    ]
];
print_r($todo);
echo '<br>';

// matrixdan array olish:
$dushanba = $todo['dushanba'];
print_r($dushanba);
echo '<br>';

// $dushanba dagi 0-indexli elementga murojaat:
print_r($dushanba[0]);
echo '<br>';

// matrixdagi biror elementga murojaat:
print_r($todo['dushanba'][0]);
echo '<br>';

// ichma-ich massiv emas, assotsiativ massivning biror elementiga murojaat:
$todo2 = [
    "dushanba" => [
        'birinchi' => 'Sayohat',
        'ikkinchi' => 'Kutubxona'
    ],
    "seshanba" => [
        'Buvimlarnikiga borish',
        'Magazinga borish'
    ]
];
$dushanba2 = $todo2['dushanba'];
print_r($todo2['dushanba']);
print_r($todo2['dushanba'][0]);


echo "</pre>";
