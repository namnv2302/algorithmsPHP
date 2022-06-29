<?php
function bubbleSort($mang) {
    $number = count($mang);
    for($i = 0; $i < $number - 1; $i++) {
        for($j = $i + 1; $j < $number; $j++) {
            if($mang[$j] < $mang[$i]) {
                $tmp = $mang[$j];
                $mang[$j] = $mang[$i];
                $mang[$i] = $tmp;
            }
        }
    }
    return $mang;
}

function hienThi($mang)
{
    $sophantu = count($mang);
    for ($i = 0; $i < $sophantu; $i++){
        echo $mang[$i] . ' ';
    }
}

$mang = [1, 10, -5, 8, 2, 0, 10];

$mang = bubbleSort($mang);
hienThi($mang);


?>
