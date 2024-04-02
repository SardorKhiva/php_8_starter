<?PHP
echo "<pre>";
/**
 * Assotsiativ massivlar
 */

// noodatiy va tavsiya qilinmaydigan elementli massiv
// kalit qiymati string | int ishlatish kerak kutilmagan holatlar bo'lmasligi uchun!
$arr = [
    1 =>    "a",       // 1-index
    "5" =>  "b",       // 5-index  string int ga o'tkaziladi
    2.5 =>  "c",       // 2-index va h.k   // float int ga butun qismi o'tadi
    true => "d",       // true -> 1, false -> 0, tepada 1 => "a" ni chiqarmaydi
    null => "e"        // null bo'sh maydon bo'lib ko'rinadi
];
print_r($arr);
echo '<br>';


// odatiy va tavsiya qilinadigan elementli massiv
$odamlar = [
    "Muhammad" => 1,
    "Sardor" => 128,
    "Ahmad" => 95
];
print_r($odamlar);
var_dump($odamlar);
// print_r($odamlar["Sardor"]);

$odamlar["Mahmud"] = 18;        // yangi element qo'shish
var_dump($odamlar);
echo '<br>';

$odamlar[] = 19;
var_dump($odamlar);
echo '<br>';


echo "</pre>";
