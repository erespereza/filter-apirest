<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $method = $this->method();
        if ($method === 'PUT') 
        {
            return [
                'name' =>       ['required', 'string'],
                'type' =>       ['required', 'string', Rule::in(['P', 'B'])],
                'email' =>      ['required', 'string', 'email'],
                'address' =>    ['required', 'string'],
                'city' =>       ['required', 'string'],
                'state' =>      ['required', 'string'],
                'postal_code' =>['required', 'string'],
            ];
        }else{
            return [
                'name' =>       ['sometimes', 'string'],
                'type' =>       ['sometimes', 'string', Rule::in(['P', 'B'])],
                'email' =>      ['sometimes', 'string', 'email'],
                'address' =>    ['sometimes', 'string'],
                'city' =>       ['sometimes', 'string'],
                'state' =>      ['sometimes', 'string'],
                'postal_code' =>['sometimes', 'string'],
            ];
        }
    }

    protected function prepareForValidation()
    {
        if($this->postalCode)
        {
            $this->merge([
                'postal_code' => $this->postalCode
            ]);
        }
    }
}
