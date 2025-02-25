<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SayingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'content' => 'required|string|max:500',
            'reference' => 'required|string|max:255',
            'display_date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'content.required' => __('saying.content_required'),
            'reference.required' => __('saying.reference_required'),
            'display_date.required' => __('saying.display_date_required'),
        ];
    }
}
