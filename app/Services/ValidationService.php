<?php
namespace App\Services;

class ValidationService
{
    /**
     * Amount validation
     *
     * @param String amount
     * @return Boolean result
     */
    public function amountValidation($amount)
    {
        $amount = $this->setAmountAsNumeric($amount);
        return $this->checkLoanIsBetweenMinAndMax($amount);
    }

    /**
     * Set amount as numeric
     *
     * @param String amount
     * @return Float new amount
     */
    public function setAmountAsNumeric($amount)
    {
        $amount = str_replace(" ", "", $amount);
        $amount = str_replace(",", ".", $amount);
        if(is_numeric($amount))
            return $amount;

        return 0;
    }

    /**
     * Check loan is between min and max
     *
     * @param Float amount
     * @return Boolean result
     */
    private function checkLoanIsBetweenMinAndMax($amount)
    {
        if($amount > env('LOAN_MAX') || $amount < env('LOAN_MIN'))
            return false;

        return true;
    }
}
