<?php

/**
 * If else ning qisqa ko'rinishi
 * Ternar operator
 */

$yosh1 = 27;
$yosh2 = 24;

echo 'if else orqali: ';
if ($yosh1 > $yosh2) {
    echo "$yosh1 katta $yosh2 dan";
} else {
    echo "$yosh1 kichik $yosh2 dan";
}
echo '<br>';

echo 'ternar operatori qiymatini o\'zgaruvchiga saqlash orqali: ';
$yoshi = $yosh1 > $yosh2 ? "$yosh1 katta $yosh2 dan" : "$yosh1 kichik $yosh2 dan";
echo $yoshi . '<br>';

echo 'Bevosita ternar operator orqali: ';
echo $yosh1 > $yosh2 ? "$yosh1 katta $yosh2 dan" : "$yosh1 kichik $yosh2 dan";
