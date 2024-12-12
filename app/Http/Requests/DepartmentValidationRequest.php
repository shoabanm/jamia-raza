<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentValidationRequest extends FormRequest
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
    public function rules()
    {
        return [
            'short_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'picture' => 'required_if:picture,null|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'short_name.required' => __('validation.required', ['attribute' => __('fields.short_name')]),
            'title.required' => __('validation.required', ['attribute' => __('fields.title')]),
            'description.required' => __('validation.required', ['attribute' => __('fields.description')]),
            'picture.required' => __('validation.required', ['attribute' => __('fields.picture')]),
            'picture.image' => __('validation.image', ['attribute' => __('fields.picture')]),
            'picture.mimes' => __('validation.mimes', ['attribute' => __('fields.picture')]),
        ];
    }
}
