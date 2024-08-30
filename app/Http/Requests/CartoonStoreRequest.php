<?php

namespace App\Http\Requests;

use App\Models\Cartoon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CartoonStoreRequest extends FormRequest
{
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
            'category_id' => ['required', 'integer'], // todo надо сделать, чтобы это были id из types
            'title' => [
                'required',
                'string',
                'min:3',
                'max:255',
            ],
            'description' => [
                'required',
                'string',
            ],
        ];
    }
}
