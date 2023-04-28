<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
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
        $id=request()->item->id;
        return [
            'item_name' => "required|min:3|max:50|unique:items,name,$id",
            'item_price' => "required|gte:50|lte:100000|numeric",
            'item_stock' => "required|gte:2|lte:100|numeric"
        ];
    }
}
