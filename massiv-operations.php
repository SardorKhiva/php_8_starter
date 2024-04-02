<?php
echo "<pre>";

/**
 * Matritsalar bilan ishlovchi bazi funksiyalar:
 * 
 * isset - mavjudligini tekshirish
 * unset - o'chirish
 * count - sonini topish
 * array_push - element qo'shish
 * in_array - element bor yo'qligini tekshirish
 * implode - elementlarni biror belgi bilan bir butun string qiladi
 * array_keys - massivdagi key larni boshqa massivga nusxalaydi
 * array_values - massivdagi qiymatlarni boshqa massivga nusxalaydi
 */

$week = [
    1 => 'monday',
    2 => 'tuesday',
    3 => 'wednesday',
    4 => 'thursday',
    5 => 'friday',
    6 => 'saturday',
    7 => 'sunday'
];

// isset - borligini tekshirish:
print_r(isset($week));      // bo'lsa 1, bo'lmasa 0
echo '<br>';
echo (isset($week));      // bo'lsa 1, bo'lmasa 0
echo '<br>';

if (isset($week[1])) {
    echo $week[1];
} else {
    echo 'Bunday key yo\'q';
};
echo '<br><br>';

// unset:
print_r($week);
print_r('Massiv elementlari soni: ' . count($week) . ' ta' . '<br><br>');
unset($week[3]);
print_r($week);

// count:
print_r('Massiv elementlari soni: ' . count($week) . ' ta' . '<br><br>');

// array_push - element qo'shish
array_push($week, 'new day1', 'new day2');
print_r($week);
echo '<br> <br>';

// in_array - element bor yo'qligini tekshirish
var_dump(in_array("monday", $week));    // bo'lsa true
echo '<br> <br>';

// implode - elementlarni biror belgi bilan bir butun string qiladi
print_r(implode(', ', $week));
echo '<br> <br>';

// array_keys - massivdagi key larni boshqa massivga nusxalaydi
$week2 = array_keys($week);
print_r($week2);
echo '<br> <br>';

// array_values - massivdagi qiymatlarni boshqa massivga nusxalaydi
$week3 = array_values($week);
print_r($week3);
echo '<br> <br>';


echo "</pre>";
