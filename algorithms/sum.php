<?php

declare(strict_types=1);

final class Numbers
{
    private static $sum = 0;

    public static function sum(int $n)
    {
        for ($i = 1; $i <= $n; $i++) {
            self::$sum = self::$sum + $i;
        }
        return self::$sum;
    }
}

echo Numbers::sum(3);