<?php
echo "<pre>";       // probellardan brauzerda to'laqonli foydalanish uchun
// QO'SHTIRNOQ: '' ""

// birlik '' qo'shtirnoqlar:
echo '1. Bu oddiy qator';
echo '<br>';

// ekranlashtirish ' (birlik qo'shtirnoq), ' ni matn ichida ishlatish:
echo '2. Kunlardan bir kuni u \'Men keldim\' dedi';
echo '<br>';

// \ ni matn ichida ishlatish:
echo '3. Siz rostdan ham "C:\\Program Files" jildini o\'chirmoqchimizsiz? ';
echo '<br><br>';

// ikkilik qo'shtirnoqlar:
$name = "Sardor";
$secondName = "Xivaqiy";
echo "4. Assalomu alaykum $name $secondName" . '<br>';
echo '<br><br>';

echo "5. Bir nechta qatorni \n egallagan matndan namuna.\n";
echo '<br>';

// " " ni ekranlashtirish - matn ichida ishlatish:
echo "6. Bir kuni Terminator: \"I'll be back\"\n dedi. <br>";

// $ ni ekranlashtirish:
echo "7. USD dollar belgisi \$";
echo "<pre>";
