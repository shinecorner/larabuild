<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
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
            'type' => 'required',
            'slug' => 'required|unique:properties',
            'sq_feet' => 'required',
            'direction' => 'required',
            'direction' => 'required',
            'discription' => 'required',
            'is_sold' => 'required',
            'evidance_date' => 'required',
            'author.name' => 'required',
            'author.surname' => 'required',
            'v1\.0' => 'required',
            'publish_at' => 'nullable|date'
        ];
    }
    public function messages()
    {
        return [
            'slug.required' => 'Slug Enter',
            'slug.unique' => 'Unique Filed',
        ];
    }

    public function withValidator($validator){
        $validator->after(function ($validator) {
            $validator->errors()->add('sq_feet', 'Something is wrong with this field!');
        });
    }
}
