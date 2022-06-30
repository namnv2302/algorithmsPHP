<?php

declare(strict_types=1);

final class MaxChar
{
    public static function get(string $string): string
    {
        $map = [];

        foreach (str_split($string) as $char) {
            if (isset($map[$char])) {
                ++$map[$char];
            } else {
                $map[$char] = 1;
            }
        }

        $max = '';
        $freqMax = 0;

        foreach ($map as $char => $freq) {
            if ($freq <= $freqMax) {
                continue;
            }

            $max = $char;
            $freqMax = $freq;
        }

        return (string) $max;
    }
}

echo MaxChar::get('apple');
