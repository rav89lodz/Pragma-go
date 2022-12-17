<?php

namespace Tests\Unit;

use App\Models\LoanProposal;
use App\Repositories\LoanProposalRepository;
use App\Services\ValidationService;
use PHPUnit\Framework\TestCase;

class LoanProposalTest extends TestCase
{
    /**
     * ValidationService test.
     *
     * @return void
     */
    public function test_set_amount_as_numeric_not_numeric()
    {
        $amout = (new ValidationService)->setAmountAsNumeric("abcd");
        $this->assertEquals(0, $amout);
    }

    /**
     * ValidationService test.
     *
     * @return void
     */
    public function test_set_amount_as_numeric_correct_data()
    {
        $amout = (new ValidationService)->setAmountAsNumeric("5 000,12");
        $this->assertEquals(5000.12, $amout);
    }

    /**
     * ValidationService test.
     *
     * @return void
     */
    public function test_amount_validation_correct_data()
    {
        $amout = (new ValidationService)->amountValidation("5 000,12");
        $this->assertEquals(true, $amout);
    }

    /**
     * ValidationService test.
     *
     * @return void
     */
    public function test_amount_validation_not_numeric()
    {
        $amout = (new ValidationService)->amountValidation("abcd");
        $this->assertEquals(false, $amout);
    }

    /**
     * ValidationService test.
     *
     * @return void
     */
    public function test_amount_validation_above_maximum()
    {
        $amout = (new ValidationService)->amountValidation("30 000,17");
        $this->assertEquals(false, $amout);
    }

    /**
     * ValidationService test.
     *
     * @return void
     */
    public function test_amount_validation_below_minimum()
    {
        $amout = (new ValidationService)->amountValidation("358");
        $this->assertEquals(false, $amout);
    }

    /**
     * LoanProposalRepository test.
     *
     * @return void
     */
    public function test_calculate_correct_data_for_24_months()
    {
        $loanModel = new LoanProposal();
        $amout = (new LoanProposalRepository($loanModel))->calculate(['amount' => "2 750", 'term' => 24]);
        $this->assertEquals(115, $amout);
    }

    /**
     * LoanProposalRepository test.
     *
     * @return void
     */
    public function test_calculate_correct_data_for_12_months()
    {
        $loanModel = new LoanProposal();
        $amout = (new LoanProposalRepository($loanModel))->calculate(['amount' => "5000", 'term' => 12]);
        $this->assertEquals(100, $amout);
    }

    /**
     * LoanProposalRepository test.
     *
     * @return void
     */
    public function test_calculate_correct_data_for_24_months_ver2()
    {
        $loanModel = new LoanProposal();
        $amout = (new LoanProposalRepository($loanModel))->calculate(['amount' => "11 395", 'term' => 24]);
        $this->assertEquals(460, $amout);
    }

    /**
     * LoanProposalRepository test.
     *
     * @return void
     */
    public function test_calculate_correct_data_for_12_months_vre2()
    {
        $loanModel = new LoanProposal();
        $amout = (new LoanProposalRepository($loanModel))->calculate(['amount' => "17 564,12", 'term' => 12]);
        $this->assertEquals(355, $amout);
    }

    /**
     * LoanProposalRepository test.
     *
     * @return void
     */
    public function test_calculate_incorrect_data_for_12_months_below_minimum()
    {
        $loanModel = new LoanProposal();
        $amout = (new LoanProposalRepository($loanModel))->calculate(['amount' => "357,12", 'term' => 12]);
        $this->assertEquals(0, $amout);
    }

    /**
     * LoanProposalRepository test.
     *
     * @return void
     */
    public function test_calculate_incorrect_data_for_24_months_below_minimum()
    {
        $loanModel = new LoanProposal();
        $amout = (new LoanProposalRepository($loanModel))->calculate(['amount' => "864,99", 'term' => 24]);
        $this->assertEquals(0, $amout);
    }

    /**
     * LoanProposalRepository test.
     *
     * @return void
     */
    public function test_calculate_incorrect_data_for_12_months_above_maximum()
    {
        $loanModel = new LoanProposal();
        $amout = (new LoanProposalRepository($loanModel))->calculate(['amount' => "23 111", 'term' => 12]);
        $this->assertEquals(0, $amout);
    }

    /**
     * LoanProposalRepository test.
     *
     * @return void
     */
    public function test_calculate_incorrect_data_for_24_months_above_maximum()
    {
        $loanModel = new LoanProposal();
        $amout = (new LoanProposalRepository($loanModel))->calculate(['amount' => "24 989", 'term' => 24]);
        $this->assertEquals(0, $amout);
    }

    /**
     * LoanProposalRepository test.
     *
     * @return void
     */
    public function test_calculate_incorrect_data_months_value()
    {
        $loanModel = new LoanProposal();
        $amout = (new LoanProposalRepository($loanModel))->calculate(['amount' => "11 395", 'term' => 18]);
        $this->assertEquals(0, $amout);
    }
}
