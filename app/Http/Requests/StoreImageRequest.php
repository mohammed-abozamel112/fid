<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreImageRequest extends FormRequest
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
            'name_ar' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'path_url' => 'nullable|url|max:10048',
            'alt_text_ar' => 'nullable|string|max:255',
            'alt_text_en' => 'nullable|string|max:255',
            'caption_ar' => 'nullable|string|max:255',
            'caption_en' => 'nullable|string|max:255',
            'type' => [
                'required',
                Rule::in(['blog', 'service', 'gallery', 'profile', 'client','works','home','about']),
            ],
            'service_id' => 'nullable|exists:services,id',
            'blog_id' => 'nullable|exists:blogs,id',
        ];
    }
}
