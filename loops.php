<?php

echo '<pre>';
/**
 * Loops - sikllar:
 * while - shart sikli
 * do while - 
 * for - parametri sikl
 * foreach
 */

/////////////////////////////////////////////////////////////////////////////////////////////

echo 'while sikli: <br>';
$i = 1;
while ($i <= 10) {
    echo $i++ . '<br>';
};
echo '<br>';

/////////////////////////////////////////////////////////////////////////////////////////////

echo 'continue ga misol: <br>';
$j = 0;
while ($j <= 10) {
    $j++;
    if ($j % 2 == 0) {
        continue;
    }
    echo $j . '<br>';
};
echo '<br>';

/////////////////////////////////////////////////////////////////////////////////////////////

echo 'break ga misol: <br>';
$k = 0;
while ($k <= 10) {
    $k++;
    if ($k % 5 == 0) {
        break;
    }
    echo $k . '<br>';
};
echo '<hr>';

/////////////////////////////////////////////////////////////////////////////////////////////

echo 'do while ga misol: <br>';
$hafta = ['dushanba', 'seshanba', 'chorshanba', 'payshanba', 'juma', 'shanba', 'yakshanba'];
$kun = 0;       // index 0 dan boshlangani uchun
$index = 1;
do {
    echo $index++ . ') ' . $hafta[$kun++] . '<br>';
} while ($kun < count($hafta));
echo '<hr>';

/////////////////////////////////////////////////////////////////////////////////////////////

echo 'for ga misol: <br>';
$hafta = [1 => 'dushanba', 'seshanba', 'chorshanba', 'payshanba', 'juma', 'shanba', 'yakshanba'];
$oy = [];
$oyKuni = 1;

for ($kun = 1; $kun <= 31; $kun++) {

    $oy[$kun] = $hafta[$oyKuni];    // har bir oy kuniga haftaning bir kuni nomini o'zlashtirib boramiz

    if ($oyKuni % 7 == 0) {         // 7-hafta kuni nomidan keyin 1-hafta kuni nomidan boshlab ketish uchun 
        $oyKuni = 1;
    } else {
        $oyKuni++;                  // boshqa holatda oy kuniga beriladigan hafta kuni nomi 1 kunga oshib borsin
    }

    if ($oy[$kun] == 'juma') echo "\t"; // oy kunida juma kuni bo'lsa, juma ni alohida o'ngroqda ko'rsatish uchun
    echo $oy[$kun] . '<br>';
}
print_r($oy);
echo '<hr>';

/////////////////////////////////////////////////////////////////////////////////////////////

echo 'foreach ga misol: <br>';
$sonlar = [1, 2, 3, 4, 5];

foreach ($sonlar as $son) {
    echo $son . '<br>';
}
echo '<br>';

echo 'juft sonlar: <br>';
foreach ($sonlar as $son) {
    if ($son % 2 === 0) {
        echo $son . '<br>';
    }
}
echo '<br>';

echo 'toq sonlar: <br>';
foreach ($sonlar as $son) {
    if ($son % 2 === 0) {
        continue;
    }
    echo $son . '<br>';
}
echo '<br>';

echo 'kaliti va qiymati bilan chiqarish: <br>';
foreach ($sonlar as $kalit => $son) {
    echo "Kalit: " . $kalit . ", qiymati: " . $son . "<br>";
}
echo '<br>';


echo 'kaliti va qiymati bilan chiqarish, odamlar va id misolida: <br>';
$odamlar = [
    'Abdulloh' => '1',
    'Abdurahmon' => '2',
    'Muhammad' => '3'
];
echo '<br>';

foreach ($odamlar as $kalit => $son) {
    echo "Foydalanuvchi: " . $kalit . ", ID si: " . $son . "<br>";
}


echo '</pre>';
