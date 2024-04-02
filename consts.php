<?php

// string tipli konstanta aniqlaymiz
define('MATN', 'Salom, bu konstanta');

// const tipi, hajmi(baytda) va qiymati chiqaradigan funksiya
echo MATN . '<br>';
var_dump(MATN);
echo '<br>';

// string tipli konstanta aniqlaymiz
const PATH_TO_MY_PROJECT = "some/path/to/my/project";
echo PATH_TO_MY_PROJECT . '<br>';
var_dump(PATH_TO_MY_PROJECT);
echo '<br>';
echo '<br>';

// output: array(6) { [0]=> bool(true) [1]=> string(5) "Salom" [2]=> string(4) "Nima" [3]=> int(10) [4]=> float(1.628) [5]=> bool(false) } :
define('DATA', [true, 'Salom', "Nima", 10, 1.628, FALSE]);
var_dump(DATA);
echo '<br>';

// DATA array bor-yo'qligini aniqlaydigan bool tipli funksiya qiymatini $res ga o'zlashtiramiz:
$res = defined('DATA');

// bor bo'lsa bool(true)
var_dump($res);
echo $res;
echo '<br>';
