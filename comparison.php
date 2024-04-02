<?php
echo '<pre>';
/**
 * Taqqoslash operatorlari, amallari
 */


echo "Tenglikka (==) tekshirish (turlarni keltirish(casting)dan keyin): \n\n";
echo '2 == "2" ';
var_dump(2 == "2");     // true
echo '<br>';

////////////////////////////

echo "2 == \"2\" ";
var_dump(2 == "2");     // true
echo '<br>';

echo '2 == "Хива" ';
var_dump(2 == "Хива");  // false
echo '<br>';

echo '7 == 7 ';
var_dump(7 == 7);       // true
echo '<hr>';

////////////////////////////

echo "Aynan tiplari bilan tenglikka (===) tekshirish: \n\n";
echo '2 === "2" ';
var_dump(2 === "2");    // false
echo '<br>';

echo '5 === 5 ';
var_dump(5 === 5);      // true
echo '<br>';

echo '5 === 5.0 ';
var_dump(5 === 5.0);    // false
echo '<hr>';

////////////////////////////

echo "Teng emaslikka (!=) tekshirish (turlarni keltirgandan keyin):\n\n";
echo '5 != 7 ';
var_dump(5 != 7);       // true
echo '<br>';

echo '5 != 5 ';
var_dump(5 != 5);       // false
echo '<br>';

echo '5 != "5" ';
var_dump(5 != "5");     // false
echo '<br>';

echo '5 != "7" ';
var_dump(5 != "7");     // true
echo '<br>';

echo '5.0 != "7" ';
var_dump(5.0 != "7");   // true
echo '<br>';

echo '5 != "7.0" ';
var_dump(5 != "7.0");   // true
echo '<hr>';

////////////////////////////

echo "Aynan tengmaslikka (!==) tekshirish:\n\n";
echo '5 !== 2 ';
var_dump(5 !== 2);      // true
echo '<br>';

echo '5 !== 5 ';
var_dump(5 !== 5);      // false
echo '<br>';

echo '5.0 !== 5 ';
var_dump(5.0 !== 5);    // false
echo '<hr>';

////////////////////////////

echo "<, > : \n\n";
echo '2 < 3 ';
var_dump(2 < 3);    // true
echo '<br>';

echo '2 < 2 ';
var_dump(2 < 2);    // false
echo '<br>';

echo '2 > 3 ';
var_dump(2 > 3);    // false
echo '<br>';

echo '2 > 2 ';
var_dump(2 > 2);    // false
echo '<hr>';

////////////////////////////

echo "<= , >= :\n\n";
echo '1 <= 2 ';
var_dump(1 <= 2);   // true
echo '<br>';

echo '1 <= 1 ';
var_dump(1 <= 1);   // true
echo '<br>';

echo '1 <= 0 ';
var_dump(1 <= 0);   // false
echo '<br>';

echo '1 <= 0 ';
var_dump(1 <= 0);   // false
echo '<br>';

echo '1 >= 2 ';
var_dump(1 >= 2);   // false
echo '<br>';

echo '1 >= 1 ';
var_dump(1 >= 1);   // true
echo '<BR>';

echo '2 >= 1 ';
var_dump(2 >= 1);   // true
echo '<br>';

echo '<pre>';
