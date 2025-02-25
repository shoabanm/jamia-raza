<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AyatRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'content' => 'required|string',
            'reference' => 'nullable|string',
            'display_date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'content.required' => __('validation.required', ['attribute' => __('fields.ayat_content')]),
            'display_date.required' => __('validation.required', ['attribute' => __('fields.display_date')]),
        ];
    }
}
