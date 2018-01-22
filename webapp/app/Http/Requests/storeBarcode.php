<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeBarcode extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'barcode'=>'required|string|numeric',
            'description'=>'required|string|max:30',
            //
        ];
    }
    public function messages()
    {
        return [
            'numeric'=>trans('validation.numeric'),
            'required'=>trans('validation.required'),
            'max'=>trans('validation.max')
        ];
    }
}
