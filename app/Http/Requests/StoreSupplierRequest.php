<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
        return [
            'supplierName' => 'required|string|max:200',
            'supplierAddress' => 'required|string|max:300',
            'phone' => 'required|string',
            'email' => 'required|email|max:200',
            'tinNumber' => 'required|string|max:200',
            'tradeLicense' => 'required|string|max:200',
            'bankAcNo' => 'required|string|max:200',
            'emergencyContact' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $phone = $this->input('phone');
            $emergencyContact = $this->input('emergencyContact');

            if ($phone == $emergencyContact) {
                $validator->errors()->add('phone', 'Phone number and emergency contact number must be the same.');
            }
        });
    }
}
