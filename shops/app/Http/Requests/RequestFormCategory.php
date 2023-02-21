<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestFormCategory extends FormRequest
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
        $rules= [

            'categoryname'=>[
                'required',
                'string',
            ], 
            'slug'=>[
                'required',
                'string',
            ], 
            'description'=>[
                'required',
                'string',
            ], 
            'status'=>[
                'nullable',
                'string',
                
                
            ], 
            'popular'=>[
                'nullable',
                'string',
                
               
            ], 
            'metatitle'=>[
                'required',
                'string',
            ], 
            'image'=>[
                'required',
                'mimes:jpeg,jpg,png,webp',
            ], 
            'metadescription'=>[
                'required',
                'string',
            ],
            'metakeywords'=>[
                'required',
                'string',
            ],  
            
        ];

        return $rules;
    }
}
