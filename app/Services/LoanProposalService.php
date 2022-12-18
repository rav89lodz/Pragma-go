<?php
namespace App\Services;

use App\Models\LoanProposal;

class LoanProposalService
{
    /**
     * Get partition by term value
     *
     * @param Float loan value
     * @param Integer term value
     * @return Array partition for loan
     */
    public function getPartitionByTerm($loanValue, $term)
    {
        $model = new LoanProposal();
        if($term == 12)
        {
            return $this->getPartitionForLoan($loanValue, $model->breakpoint12);
        }
        if($term == 24)
        {
            return $this->getPartitionForLoan($loanValue, $model->breakpoint24);
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
