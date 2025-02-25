<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'description' => 'required|string',
            'pictures' => 'nullable|array',
            'pictures.*' => 'image|mimes:jpg,jpeg,png,bmp|max:2048',
        ];
    }
    
    public function messages()
    {
        return [
            'title.required' => __('events.title_required'),
            'event_date.required' => __('events.date_required'),
            'description.required' => __('events.description_required'),
            'pictures.*.image' => __('events.image_required'),
            'pictures.*.mimes' => __('events.image_mimes'),
            'pictures.*.max' => __('events.image_max'),
            'pictures.*.required' => __('events.pictures_required'),
            'pictures.*.nullable' => __('events.pictures_nullable'),
            'pictures.*.array' => __('events.pictures_array'),
        ];
    }
    
}
