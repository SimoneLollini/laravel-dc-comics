<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:100',
            'description' => 'nullable|nullable',
            'image' => 'nullable|max:255',
            'price' => 'nullable|numeric',
            'series' => 'nullable|max:10',
            'sale_date' => 'nullable|max:10',
            'type' => 'nullable|max:100'
        ];
    }
}
