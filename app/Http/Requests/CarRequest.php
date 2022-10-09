<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (auth()->user() && auth()->user()->is_admin) {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'model_id'             => 'required',
            'photo'                => 'required|mimes:jpeg,bmp,png',
            'year'                 => 'required|numeric',
            'number'               => 'required',
            'color'                => 'required',
            'transmission'         => 'required',
            'rental_price_per_day' => 'required',
        ];
    }
}
