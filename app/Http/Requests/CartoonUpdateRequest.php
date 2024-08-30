<?php

namespace App\Http\Requests;

use App\Models\Cartoon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CartoonUpdateRequest extends FormRequest
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
            'category_id' => ['required', 'integer'],
            'title' => [
                'required',
                'string',
                'min:3',
                'max:255',
                Rule::unique('cartoons')->ignore($this->cartoon->id),
            ],
            'description' => [
                'required',
                'string',
            ],
        ];
    }
}
