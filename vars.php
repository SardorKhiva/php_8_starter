<?php

echo 'boolean type: <br>';
$available = true;              // $available ga true qiymatni o'zlashtirish:
var_dump($available);           // tip va qiymatni ko'rsatadigan funksiya
echo '<br>';                    // yangi qator tashlash

$unavailable = FALSE;           // $unavailable ga false qiymatni o'zlashtirish
var_dump($unavailable);
print '<br> <br>';              // 2ta yangiqator

echo 'integer type: <br>';
$age = 18;                      // int
echo $age . '<br>';             // 18 chiqadi
echo "$age" . "<br>";           // 18 chiqadi
echo '"$age"';                  // "$age" chiqaradi
echo " : ";
var_dump($age);
echo '<br>';

$negative = -7;                 // int
var_dump($negative);
echo '<br> <br>';

echo 'float type: <br>';
$PI = 3.14;                     // float
var_dump($PI);
echo '<br> <br>';


echo 'string type: <br>';
$hello = 'Hello world';         // string
var_dump($hello);               // tip va baytdagi hajmi chiqariladi
$goodBye = "Ko'rishguncha!";    // string
echo '<br>';
var_dump($goodBye);
echo '<br>';
$goodBye = "коришгунча";
var_dump($goodBye);
$goodBye = 27;                  // dinamik tipizatsiyali til bo'lgani uchun tipni o'zgartirish mumkin;
echo '<br>';
var_dump($goodBye);
echo '<br> <br>';


// null tip, bo'sh tip
echo 'NULL type: <br>';
$empty = null;
$emptY = NULL;
var_dump($emptY);
var_dump($empty);
echo '<br> <br>';

//  tipidan qat'iy nazar o'zgaruvchilarni

echo "O'zgaruvchilar bilan 3 ta asosiy amal: <br>";
$name = 'Sardor';               //  1) qiymat o'zlashtirish:
echo $name . '<br>';

$isNameSet = isset($name);      //  2) mavjudligini tekshirish
echo $isNameSet . '<br>';
var_dump($isNameSet);

unset($name);                   //  3) yo'q qilish mumkin
echo $isNameSet . '<br>';       // $name o'chgan bilan $isNameSet o'chmadi
var_dump($isNameSet);           // $isNameSet ning tipi va qiymati ham o'chmadi
var_dump($name);                // $name o'chgani uchun NULL chiqadi
