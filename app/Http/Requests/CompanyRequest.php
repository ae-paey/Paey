<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
          'company_name' => ['required', 'min:3'],
          'company_email' => ['required', 'email', Rule::unique((new User)->getTable())->ignore(auth()->id())],
          'company_position' => ['required', 'min:3'],
          'company_location' => ['required', 'min:3'],
          'company_phone' => ['required', 'min:9'],
        ];
    }
}
