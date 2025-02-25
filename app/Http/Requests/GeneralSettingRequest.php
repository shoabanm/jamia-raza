<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingRequest extends FormRequest
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
            'phone_number' => 'required|string|max:15',
            'whatsapp_number' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'facebook_link' => 'nullable|url|max:255',
            'twitter_link' => 'nullable|url|max:255',
            'tiktok_link' => 'nullable|url|max:255',
            'instagram_link' => 'nullable|url|max:255',
            'map_link' => 'nullable|url|max:255',
            'address' => 'nullable|string|max:255',
            'youtube_link' => 'nullable|url|max:255',
            'twitch_link' => 'nullable|url|max:255',
        ];
    }

    public function messages()
    {
        return [
            'phone_number.required' => __('general_settings.phone_number_required'),
            'whatsapp_number.required' => __('general_settings.whatsapp_number_required'),
            'email.required' => __('general_settings.email_required'),
            'address.required' => __('general_settings.address_required'),
            'facebook_link.url' => __('general_settings.facebook_link_url'),
            'twitter_link.url' => __('general_settings.twitter_link_url'),
            'tiktok_link.url' => __('general_settings.tiktok_link_url'),
            'instagram_link.url' => __('general_settings.instagram_link_url'),
            'map_link.url' => __('general_settings.map_link_url'),
            'youtube_link.url' => __('general_settings.youtube_link_url'),
            'twitch_link.url' => __('general_settings.twitch_link_url'),
        ];
    }
}
