<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoanProposalTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('Calculator.index');
    }

    /**
     * Test post route with correct data
     *
     * @return void
     */
    public function test_post_data_returns_a_successful_response()
    {
        $response = $this->post('/', ['term' => 12, 'amount' => "5000", '_token' => csrf_token()]);

        $response->assertStatus(302);
        $response->assertSessionHas('success');
    }

    /**
     * Test post route with incorrect term data
     *
     * @return void
     */
    public function test_post_data_redirect_to_index_page()
    {
        $response = $this->post('/', ['term' => 5, 'amount' => "5000", '_token' => csrf_token()]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('term');
    }

    /**
     * Test post route with incorrect amount data
     *
     * @return void
     */
    public function test_post_data_redirect_to_error_page()
    {
        $response = $this->post('/', ['term' => 12, 'amount' => "30", '_token' => csrf_token()]);

        $response->assertViewIs('Calculator.error');
    }

    /**
     * Test post route without term data
     *
     * @return void
     */
    public function test_data_term_is_required()
    {
        $response = $this->post('/', ['amount' => "3000", '_token' => csrf_token()]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('term');
    }

    /**
     * Test post route without amount data
     *
     * @return void
     */
    public function test_data_amount_is_required()
    {
        $response = $this->post('/', ['term' => 12, '_token' => csrf_token()]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('amount');
    }
}
