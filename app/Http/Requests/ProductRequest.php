<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'quantity' => ['required', 'integer'],
            'price' => ['required', 'numeric'],
            'image' => ['string'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Product name is required',
            'quantity' => 'Quantity is required',
            'price' => 'Price is required',
            'category_id.required' => 'Category is required',
            'category_id.exists' => 'Category does not exist',
        ];
    }
}
