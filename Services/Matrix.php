<?php

class Matrix
{

    public function fibonacci(int $n)
    {
//        if ($n == 0) {
//            return 0;
//        }
        $init = [
            [1,1],
            [1,0]
        ];
        $res = $this->matrixPower($init, $n-1);
        return $res[0][0];

    }
    private function matrixMult(array $matrix1, array $matrix2): array
    {
        return [
            [
                $matrix1[0][0] * $matrix2[0][0] + $matrix1[0][1] * $matrix2[1][0],
                $matrix1[0][0] * $matrix2[0][1] + $matrix1[0][1] * $matrix2[1][1]
            ],
            [
                $matrix1[1][0] * $matrix2[0][0] + $matrix1[1][1] * $matrix2[1][0],
                $matrix1[1][0] * $matrix2[0][1] + $matrix1[1][1] * $matrix2[1][1]
            ]

        ];
    }

    private function matrixPower(array $matrix, int $n): array
    {
        if ($n <= 1) {
            return $matrix;
        }
        if (($n % 2) > 0) {
            $p = $this->matrixPower($matrix, $n/2);
            $p = $this->matrixMult($p, $p);
            return  $this->matrixMult($matrix, $p);
        } else {
            $p = $this->matrixPower($matrix, $n/2);
            return $this->matrixMult($p, $p);
        }
    }

}