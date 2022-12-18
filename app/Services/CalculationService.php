<?php
namespace App\Services;

class CalculationService
{
    /**
     * Linear interpolation
     *
     * @param Integer x1
     * @param Integer x2
     * @param Integer y1
     * @param Integer y2
     * @param Float loan value
     * @return Float fee
     */
    public function linearInterpolation($x1, $x2, $y1, $y2, $loanValue)
    {
        $a = ($y2 - $y1) / ($x2 - $x1);
        $b = ((-$x1) * ($y2 - $y1) - ($x2 - $x1) * (-$y1)) / ($x2 - $x1);
        return $a * $loanValue + $b;
    }

    /**
     * Rounding up and multiple
     *
     * @param Float to round
     * @param Integer multiple
     * @return Integer new value
     */
    public function roundingUpAndMultiple($toRound, $multiple)
    {
        $toRound = ceil($toRound);
        while($toRound % $multiple != 0)
        {
            $toRound ++;
        }
        return $toRound;
    }
}
