<?php

$a = 66;

if ($a > 0 && $a < 10) {

    echo $a ** 3;

} elseif ($a > 10 && $a <= 20) {

    echo $a ** 3;

} elseif ($a > 20) {
   
    echo sqrt($a);

} else {
    echo "Bunday son kiritish mumkin emas!";
}

?>
