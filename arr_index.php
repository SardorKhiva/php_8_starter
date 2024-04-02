<?php
echo "<pre>";
// Arrays - indexli massivlar 

// eski usul:
$arr1 = array();     // bo'sh arr
var_dump($arr1);
echo '<br>';

// yangi usul:
$arr2 = [];
var_dump($arr2);
echo '<br>';

// element kiritish:
$arr3 = ['bir', 2, 3.0];    //, true, NULL, FALSE];
var_dump($arr3);
echo '<br>';

// ELEMENT QO'SHISH:
$arr3[] = 'besh';
var_dump($arr3);
echo '<br>';

// key - index ni o'zgartirish:
$arr3 = ['bir', 5 => 2, 3.0];
var_dump($arr3);
echo '<br>';

//malum indexli element qo'shish:
$arr3 = ['bir', 2, 3.0];
$arr3[] = 'Salom';
$arr3[8] = 'Salom';
var_dump($arr3);
echo '<br>';

// ma'lum bir indexli massiv elementini var_dump qilish:
var_dump($arr3[0]);
echo "</pre>";
