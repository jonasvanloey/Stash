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
        //check add barcode form
        return [
            'barcode'=>'required|string|numeric',//barcode has to be string, numbers and is required
            'description'=>'required|string|max:30',//description has to be string,is required and can be max 30 characters
            //
        ];
    }
    public function messages()
    {
        //this code returns custom feedback trans() gives translated feedback fr,nl and en
        return [
            'numeric'=>trans('validation.numeric'),
            'required'=>trans('validation.required'),
            'max'=>trans('validation.max')
        ];
    }
}
