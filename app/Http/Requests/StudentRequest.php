<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'address' => 'required|string|max:500',
            'department_id' => 'required|exists:departments,id',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'enrolled' => 'required|boolean',
            'passed_out' => 'required|boolean',
        ];
    }

    /**
     * Custom validation messages.
     */
    public function messages(): array
    {
        return [
            'first_name.required' => __('validation.required', ['attribute' => __('fields.first_name')]),
            'last_name.required' => __('validation.required', ['attribute' => __('fields.last_name')]),
            'father_name.required' => __('validation.required', ['attribute' => __('fields.father_name')]),
            'dob.required' => __('validation.required', ['attribute' => __('fields.dob')]),
            'address.required' => __('validation.required', ['attribute' => __('fields.address')]),
            'department_id.required' => __('validation.required', ['attribute' => __('fields.department')]),
            'department_id.exists' => __('validation.exists', ['attribute' => __('fields.department')]),
            'picture.image' => __('validation.image', ['attribute' => __('fields.picture')]),
            'picture.mimes' => __('validation.mimes', ['attribute' => __('fields.picture')]),
            'picture.max' => __('validation.max.file', ['attribute' => __('fields.picture'), 'max' => '2048']),
            'enrolled.required' => __('validation.required', ['attribute' => __('fields.enrolled')]),
            'passed_out.required' => __('validation.required', ['attribute' => __('fields.passed_out')]),
        ];
    }

    /**
     * Custom attribute names for error messages.
     */
    public function attributes(): array
    {
        return [
            'first_name' => __('fields.first_name'),
            'last_name' => __('fields.last_name'),
            'father_name' => __('fields.father_name'),
            'dob' => __('fields.dob'),
            'address' => __('fields.address'),
            'department_id' => __('fields.department'),
            'picture' => __('fields.picture'),
            'enrolled' => __('fields.enrolled'),
            'passed_out' => __('fields.passed_out'),
        ];
    }
}
