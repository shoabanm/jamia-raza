<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PictureGalleryRequest extends FormRequest
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
        'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];
}

public function messages()
{
    return [
        'title.required' => __('picture_gallery.title_required'),
        'picture.required' => __('picture_gallery.picture_required'),
    ];
}

}
