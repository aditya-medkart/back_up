<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreexampleRequest extends BaseRequest
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
            'name' => 'required|string',
            'salt_composition' => 'required|string',
            'packsize' => 'required|string',
            'price' => 'required|numeric',
            'slug' => 'required|string',
            'image' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'name is required!',
            'salt_composition.required' => 'salt_composition is required!',
            'packsize.required' => 'packsize is required!',
            'price.required' => 'price is required!',
            'slug.required' => 'slug is required!',
            'image.string' => 'image is requried!'
        ];
    }
}
