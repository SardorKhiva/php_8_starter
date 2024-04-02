<?php

/**
 * If else Tanlash operatori
 */

$a = 10;
$b = 5;

if ($a < $b) {
    echo "$a katta $b dan";
} else {
    echo "$a kichik $b dan";
}
echo '<br>';

if ($a < 11) {
    echo "$a kichik 11 dan";
} elseif ($a < 10) {
    echo "$a kichik 10 dan";
} else {
    echo "$a kichik emas.";
}
echo '<br>';
