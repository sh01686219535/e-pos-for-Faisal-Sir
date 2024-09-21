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
            'supplier_name' => 'required|string|max:200',
            'supplier_address' => 'required|string|max:300',
            'phone' => 'required|string',
            'email' => 'required|email|max:200',
            'tin_number' => 'required|string|max:200',
            'trade_license' => 'required|string|max:200',
            'bank_ac_no' => 'required|string|max:200',
            'emergency_contact' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $phone = $this->input('phone');
            $emergencyContact = $this->input('emergency_contact');

            if ($phone == $emergencyContact) {
                $validator->errors()->add('phone', 'Phone number and emergency contact number must be the same.');
            }
        });
    }
}
