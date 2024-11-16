<?php

class FibonacciNumber
{
    /**
     * Вычисление числа Фибоначчи через золотое сечение
     * @param int $n
     * @return int
     */
    public function goldFibonacci(int $n)
    {
        $phi = (1.0 + sqrt(5)) / 2.0;
        return (int) floor(pow($phi, $n) / sqrt(5) + 1.0 / 2.0);
    }
}