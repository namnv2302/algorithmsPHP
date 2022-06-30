<?php

declare(strict_types=1);

final class MaxChar
{
    public static function get(string $string)
    {
        for ($i = 0; $i < strlen($string); $i++) {
            echo $string[$i];
            for ($j = 0; $j < $i; $j++) {
                echo $string[$j];
            }
        }
    }
}

MaxChar::get('apple 2202');
