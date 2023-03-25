<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CarCreationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'model' => 'required|string',
            'brand' => 'required|string',
            'make_year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'passenger_capacity' => 'required|integer|min:1|max:10',
            'kilometers_per_liter' => 'required|numeric|min:0|max:50',
            'fuel_type' => [
                'required',
                Rule::in(['diesel', 'hybride', 'essence', 'électrique']),
            ],
            'transmission_type' => [
                'required',
                Rule::in(['Automatique', 'Manuel']),
            ],
            'daily_rate' => 'required|numeric|min:0',
            'main_image' => 'required|image',
            'secondary_images' => 'required|array|max:3',
            'secondary_images.*' => 'required|image'
        ];
    }
}
