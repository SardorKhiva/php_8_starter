<?php
echo '<pre>';

/**
 * Functions - funksiyalar
 */


// funksiyani e'lon qilish
// fumksiya nomi caseSensitiv emas, yani katta kichik harflar farqlanmaydi,
// return dan keyin hech narsa yozilmasa,
// returnni o'zi ham yozilmasa 'return null' bo'ladi
//returndan keyin yozilgan narsa ignor

$hi = 'Hello word';

function sayHello()
{
    echo 'Hello world' . '<br>';
    // echo $hi;        // ishlamaydi
}

// funksiyani chaqirish
sayHello();

/*
// funksiyani harflarini katta kichikligini o'zgartirib chaqirish:
SayHello();
// SAyHello();
// SAYHello();     // va hokazo
*/


/*
// ichma ich funksiya chaqirish:

// oldin ham chaqirsa bo'ladi:
ikki();

function bir()
{
    echo 'Bu 1-funksiya' . '<br>';
}

function ikki()
{
    bir();
    //echo 'Bu 2-funksiya' . '<br>';
}

// keyin ham chaqirsa bo'ladi:
ikki();
*/

echo '<br> <hr> <br>';

function hello()
{
    echo 'Bu returnsiz funksiyaga misol: ';    // . '<br>';
}
$hello = hello();
var_dump($hello);
echo '<br> <hr> <br>';

function hello2()
{
    return 'Bu returnli funksiyaga misol' . '<br>';
    echo 'returndan keyin yozilgan operatorlar ishlamaydi!';
}
$hello2 = hello2();
echo $hello2;       // funksiyani chiqarish
var_dump($hello2);
echo '<br> <hr> <br>';

// funksiya parametri va argumenti:
// funksiya parametri - chaqirilayotgan funksiyada yoziladi
function hello3($txt, $txt2)
{
    return $txt . ' ' . $txt2;
    //return "$txt " . "$txt2";
}

echo hello3('Muhammad', 'Ali') . '<br>';

$name = 'name';
$family = 'family';
echo hello3($name, $family) . '<br>';

// funksiya argumenti esa chaqirilayotganda yoziladi:
$print = hello3('Sardor', 'Xorazmiy');
echo $print;
echo '<br> <hr> <br>';


// qat'iy tiplashtirilgan funksiya:
function sum(int $a, int $b): int
{
    echo $a . ' + ' . $b . ' = ';
    return $a + $b;
}

$summa = sum(15, 26);
echo $summa . '<br>';
echo sum(15, 26);
echo '<br> <hr> <br>';

function summ(string $a, string $b, string $c = '!'): string
{
    // echo $a . ' + ' . $b . $c . ' => ';
    $sum = $a . $b . $c;
    return $sum;
}

function newLine(int $n = 2)    // $n = 1 yoki boshqa son yozilsa, argument ishlatish shart emas
{
    for ($i = 0; $i < $n; $i++) {
        echo '<br>';
    }
}

//$summa = summ('s', 'u');    // qo'shmaydi, int bo'lmagani uchun
//echo $summa . '<br>';
echo summ('salom', 'dunyo');
newLine(3);                   // agar argument ishlatilsa shu ishlaydi, default parameter emas
echo summ('salom', 'dunyo');
newLine(2);                   // 2 
echo summ('salom', 'dunyo');
newLine(1);

echo '</pre>';


// BU KURS TUGADI!