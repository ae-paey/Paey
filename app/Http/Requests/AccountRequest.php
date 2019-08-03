<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'ae_address' => ['required', 'min:3'],
          'bank_name' => ['required', 'min:3'],
          'baccount_name' => ['required', 'min:3'],
          'baccount_no' => ['required', 'min:3'],
        ];
    }
}
