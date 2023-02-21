<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestEditData extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            ' cateid'=>[
                'required',
                'string',

    ],
            'productname'=>[
                        'required',
                        'string',

            ],
            'slug'=>[
                'required',
                'string',

    ],
    'smalldescription'=>[
        'required',
        'string',

],
            'description'=>[
                'required',
                'string',

    ],
    'originalprice'=>[
        'required',
        'string',

],
'sellingprice'=>[
    'required',
    'string',

],
'image'=>[
    'required',
    'mimes:jpeg,jpg,png,webp',
],
'quantity'=>[
    'required',
    'string',

],
'tax'=>[
    'required',
    'string',

],
'status'=>[
    'nullable',
    'string',
    

],
'trending'=>[
    'nullable',
    'string',
    

],
'metatitle'=>[
    'required',
    'string',

],
'metakeyword'=>[
    'required',
    'string',

],
'metadescription'=>[
    'required',
    'string',

],
        ];
    return $rules;
}
}
