<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'item_name' => "required|min:3|max:50|unique:items,name",
            'item_price' => "required|gte:50|lte:100000|numeric",
            'item_stock' => "required|gte:2|lte:100|numeric"
        ];
    }
    public function messages(): array
    {
        return [
            'item_name.required'=>"နာမည်ထည့်ပေးပါ",
            'item_name.min'=>"အနည်းဆုံးသုံးလုံးတော့ထည့်ပါ"
        ];
    }
}
