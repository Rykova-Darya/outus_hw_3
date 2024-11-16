<?php

class Power
{
    /**
     * Возведение в степень через домножение O(N/2+LogN) = O(N)
     * @param float $a
     * @param int $n
     * @return float|int
     */
    public function twoPow(float $a, int $n): float|int
    {
        if ($n === 0) {
            return 1.0;
        }

        if ($n % 2 === 0) {
            $r = $this->twoPow($a, $n/2);
            return $r * $r;
        } else {
            $r = $this->twoPow($a, $n/2);
            return $a * $r * $r;
        }

    }

    /**
     * Возведение в степень через двоичное разложение показателя степени O(2LogN) = O(LogN)
     * @param float $a
     * @param int $n
     * @return float|int
     */
    public function binPow(float $a, int $n)
    {
        if ($n == 0) {
            return 1.0;
        }

        $mask = 0x80000000;
        while (($n & $mask) == 0) {
            $mask >>= 1;
        }

        $p = 1.0;
        while ($mask > 0) {
            $s = ($n & $mask) > 0 ? 1 : 0;
            if ($s == 0) {
                $p = $p * $p;
            } else {
                $p = $p * $p * $a;
            }
            $mask >>= 1;
        }

        return $p;
    }

}