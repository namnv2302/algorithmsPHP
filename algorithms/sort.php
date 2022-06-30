<?php

declare(strict_types=1);

class Sort {
    public function bubbleSort(array $array): array {
        $number = count($array);
        for($i = 0; $i < $number - 1; $i++) {
            for($j = $i + 1; $j < $number; $j++) {
                if($array[$j] < $array[$i]) {
                    $tmp = $array[$j];
                    $array[$j] = $array[$i];
                    $array[$i] = $tmp;
                }
            }
        }
        return $array;
    }

    public function selectionSort(array $array): array {
        $number = count($array);
        for ($i = 0; $i < $number; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < $number; $j++) {
                if ($array[$j] < $array[$min]) {
                    $min = $j;
                }
            }

            if ($i !== $min) {
                $tmp = $array[$i];
                $array[$i] = $array[$min];
                $array[$min] = $tmp;
            }
        }
        return $array;
    }

    public function insertionSort(array $array): array
    {
        foreach ($array as $i => $value) {
            for ($j = $i; $j > 0 && $array[$j - 1] > $value; --$j) {
                $array[$j] = $array[$j - 1];
            }
            $array[$j] = $value;
        }

        return $array;
    }
}

$sort = new Sort();
$array = [1, 10, 5, -10, -20, 5];
$newArray = $sort->insertionSort($array);

for($i = 0; $i < count($newArray); $i++) {
    echo $newArray[$i] . " ";
}
