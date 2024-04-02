<?php   // Switch case
$kun = 7;

switch ($kun) {
    case 1: {
            echo "dushanba";
            break;
        }

    case 2: {
            echo "seshanba";
            break;
        }

    case 3: {
            echo "chorshanba";
            break;
        }

    case 4: {
            echo "payshanba";
            break;
        }

    case 5: {
            echo "juma";
            break;
        }

    case 6: {
            echo "shanba";
            break;
        }

    case 7: {
            echo "yakshanba";
            break;
        }

    default: {
            echo "Bunday hafta kuni yo'q";
        }
}
echo '<br>';


switch ($kun) {
    case 8 - 1: {   // 1 - 7 oralig'idagi kunlarni belgilash uchun
            echo "Bunday hafta kuni bor";
            break;
        }

    default: {
            echo "Bunday hafta kuni yo'q";
        }
}
echo '<br>';

define('SUM', '+');
define('DIV', '-');
define('MULT', '*');
define('DIVISION', '/');
define('EXP', '**');

$operator = SUM;

$a = 27;
$b = 17;
$result = null;

switch ($operator) {
    case SUM: {
            $result = $a + $b;
            break;
        }

    case DIV: {
            $result = $a - $b;
            break;
        }

    case MULT: {
            $result = $a * $b;
            break;
        }

    case DIVISION: {
            $result = $a / $b;
            break;
        }

    case EXP: {
            $result = $a ** $b;
            break;
        }

    default: {
            echo 'Bunday amal yo\'q';
        }
}

if (isset($result)) {
    echo $a . $operator . $b . ' = ' . $result;
}
