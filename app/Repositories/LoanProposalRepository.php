<?php

namespace App\Repositories;

use App\Models\LoanProposal;
use App\Services\CalculationService;
use App\Services\LoanProposalService;
use App\Services\ValidationService;

class LoanProposalRepository extends BaseRepository
{
    private $loanValidationService;
    private $calculationService;
    private $loanProposalService;

    public function __construct(LoanProposal $model)
    {
        $this->model = $model;
        $this->loanValidationService = ValidationService::class;
        $this->calculationService = CalculationService::class;
        $this->loanProposalService = LoanProposalService::class;
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
        $partitionData = app($this->loanProposalService)->getPartitionByTerm($data['amount'], $data['term']);
        if(count($partitionData) < 1)
            return 0;

        $fee = app($this->calculationService)->linearInterpolation($partitionData[0], $partitionData[1],
                                    $partitionData[2],$partitionData[3], $data['amount']);
        return app($this->calculationService)->roundingUpAndMultiple($fee, 5);
    }
}
