<?php

/**
 * Mantiqiy operatorlar
 */
echo '<pre>';

$positive = 5 > 1;     // yoki true
$negative = 3 === 1;   // yoki false 

echo "\tBitli va & \n\n";
echo 'true and false = ';
echo 'true & false = ';
var_dump($positive and $negative);      // false
echo '<hr>';

////////////////////////////////////////

echo "\tBitli yoki |\n\n";
echo 'true or false = ';
echo 'true | false = ';
var_dump($positive or $negative);       // true
echo '<hr>';

////////////////////////////////////////

echo "\tIstisnoli yoki ^ \n\n";
echo 'true xor false = ';
echo 'true ^ false = ';
var_dump($positive xor $negative);      // true
echo '<br>';

echo 'true xor true = ';
echo 'true ^ true = ';
var_dump($positive xor $positive);      // false
echo '<br>';

echo 'false xor false = ';
echo 'false ^ false = ';
var_dump($negative xor $negative);      // false
echo '<hr>';

////////////////////////////////////////

echo "\tInkor operatori !\n\n";
echo '!true = ';
var_dump(!$positive);                   // false
echo '<br>';

echo '!false = ';
var_dump(!$negative);                   // true
echo '<hr>';

////////////////////////////////////////

echo "\tBitli operatorlardan yuqoriroq darajada turuvchi mantiqiy operatorlar\n";
echo "\tMantiqiy va &&\n\n";
echo 'true && false = ';
var_dump($positive && $negative);       // false
echo '<br>';

echo 'false && true = ';
var_dump($negative && $positive);       // false
echo '<br>';

echo 'true && true = ';
var_dump($positive && $positive);       // true
echo '<br>';

echo 'false && false = ';
var_dump($negative && $negative);       // false
echo '<br>';

echo 'true && false and true = ';
var_dump($positive && $negative and true);  // false
echo '<br>';

echo 'true && true and true = ';
var_dump($positive && true and true);       // true
echo '<br>';

echo '<hr>';

////////////////////////////////////////

echo "\tMantiqiy yoki ||\n\n";
echo 'true || true = ';
var_dump($positive || $positive);       // true
echo '<br>';

echo 'true || false = ',
var_dump($positive || $negative);       // true
echo '<br>';

echo 'false || false = ';
var_dump($negative || $negative);       // false
echo '<br>';

////////////////////////////////////////


echo '<pre>';

/**
 * Ваш токен используется для доступа к API CodeTime. Держите его в тайне:
 * b40eae63-79a3-503b-bf12-4c8fcd1a62d5
 */
