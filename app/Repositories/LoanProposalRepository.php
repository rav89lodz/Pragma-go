<?php

namespace App\Repositories;

use App\Models\LoanProposal;
use App\Services\ValidationService;

class LoanProposalRepository extends BaseRepository
{
    private $loanValidationService;

    public function __construct(LoanProposal $model)
    {
        $this->model = $model;
        $this->loanValidationService = ValidationService::class;
    }

    /**
     * Calculate
     *
     * @param Array data
     * @return Integer fee value
     */
    public function calculate(array $data)
    {
        if(app($this->loanValidationService)->amountValidation($data['amount']) == false)
            return 0;

        $data['amount'] = app($this->loanValidationService)->setAmountAsNumeric($data['amount']);
        $partitionData = $this->getPartitionByTerm($data['amount'], $data['term']);
        if(count($partitionData) < 1)
            return 0;

        $fee = $this->linearInterpolation($partitionData[0], $partitionData[1],
                                    $partitionData[2],$partitionData[3], $data['amount']);
        return $this->roundingUpFee($fee);
    }

    /**
     * Rounding up fee
     *
     * @param Float fee
     * @return Integer new fee value
     */
    private function roundingUpFee($fee)
    {
        $fee = ceil($fee);
        while($fee % 5 != 0)
        {
            $fee ++;
        }
        return $fee;
    }

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
    private function linearInterpolation($x1, $x2, $y1, $y2, $loanValue)
    {
        $a = ($y2 - $y1) / ($x2 - $x1);
        $b = ((-$x1) * ($y2 - $y1) - ($x2 - $x1) * (-$y1)) / ($x2 - $x1);
        return $a * $loanValue + $b;
    }

    /**
     * Get partition by term value
     *
     * @param Float loan value
     * @param Integer term value
     * @return Array partition for loan
     */
    private function getPartitionByTerm($loanValue, $term)
    {
        if($term == 12)
        {
            return $this->getPartitionForLoan($loanValue, $this->model->breakpoint12);
        }
        if($term == 24)
        {
            return $this->getPartitionForLoan($loanValue, $this->model->breakpoint24);
        }
        return [];
    }

    /**
     * Get partition for loan
     *
     * @param Float loan value
     * @param Array breakpoints data
     * @return Array partition for loan
     */
    private function getPartitionForLoan($loanValue, $array)
    {
        for($i = 1; $i < count($array); $i ++)
        {
            $firstValue = $array[$i - 1];
            $secondValue = $array[$i];
            if($loanValue >= $firstValue[0] && $loanValue < $secondValue[0])
            {
                return [$firstValue[0], $secondValue[0], $firstValue[1], $secondValue[1]];
            }
        }
    }
}
