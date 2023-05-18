<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarouselItemsReques extends FormRequest
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
            
                'carousel_name'  => 'string|Max:255',
                'image_path' => 'required|Max:255',
                'description' => 'string|nullable|Max:255',
                'user_id' => 'required|integer',
            
        ];
    }
}
