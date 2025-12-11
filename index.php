<?php
$son = readline("Son kiriting: ");

$tub = true;

if ($son < 2) {
    $tub = false;
}

for ($i = 2; $i < $son; $i++) {
    if ($son % $i == 0) {
        $tub = false;
        break;
    }
}

if ($tub) {
    echo "$son - tub son.";
} else {
    echo "$son - tub son emas.";
}
?>
