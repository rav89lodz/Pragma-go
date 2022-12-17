<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanProposalRequest;
use App\Repositories\LoanProposalRepository;
use Illuminate\Support\Facades\Session;

class LoanProposalController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Calculator.index');
    }

    /**
     * Calculate total fee
     *
     * @param LoanProposalRequest request data
     * @return \Illuminate\Contracts\View\View
     */
    public function calculate(LoanProposalRequest $request, LoanProposalRepository $repository)
    {
        $data = $request->all();
        $result = $repository->calculate($data);
        if($result == 0)
            return view('Calculator.error');

        return redirect()->back()->with('success', $result);
    }
}
