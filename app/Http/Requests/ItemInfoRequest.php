<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemInfoRequest extends FormRequest
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
            'category_id'=>'required',
            'sub_category_id'=>'required',
            'brand_id'=>'required',
            'color_id'=>'required',
            'size_id'=>'required',
            'name'=>'required',
            'code'=>'required',
            'supplier_id'=>'required',
        ];
    }
}
