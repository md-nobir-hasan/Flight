<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (Auth::user()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => "required|string|max:255|unique:products,name,". $this->product->id,
            'short_des' => 'nullable|string',
            'des' => 'nullable|string',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'sku' => 'nullable|string|max:255',
            'category_id' => 'required|numeric|exists:categories,id',
            'subcategory_id' => 'required|integer|exists:subcategories,id',
        ];
    }
}
