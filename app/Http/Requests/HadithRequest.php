<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HadithRequest extends FormRequest
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
            'content.required' => __('hadith.content_required'),
            'reference.required' => __('hadith.reference_required'),
            'display_date.required' => __('hadith.display_date_required'),
        ];
    }
}
