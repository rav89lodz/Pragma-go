<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoanProposalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'term' => ['required', 'integer', 'between:12,24'],
            'amount' => ['required', 'string'],
        ];
    }
}
