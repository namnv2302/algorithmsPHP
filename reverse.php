<?php

declare(strict_types=1);

final class Reverse
{
    public static function int(int $number)
    {
        $rev_num = 0;

        if ($number < 0) {
            $number = abs($number);
            while ($number > 1) {
                $rev_num = $rev_num * 10 + $number % 10;
                $number = $number / 10;
            }
            $rev_num = '-' . $rev_num;
        }

        while ($number > 1) {
            $rev_num = $rev_num * 10 + $number % 10;
            $number = $number / 10;
        }
        echo $rev_num;
    }

    public static function string(string $string)
    {
        for ($i = mb_strlen($string) - 1; $i >= 0; $i--) {
            echo $string[$i];
        }
    }
}

echo '<br/>';
Reverse::int(23);
echo '<br/>';
Reverse::string('apple');
echo '<br/>';
