<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StorePostRequest extends FormRequest
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
            'title' => 'required|unique:posts|max:3',
            'slug' => 'required|unique:posts',
            'description' => 'required',
            'author.name' => 'required',
            'author.surname' => 'required',
            'v1\.0' => 'required',
            'publish_at' => 'nullable|date',
        ];
    }
    public function messages()
    {
        return [
//            'title.required' => 'Title enter karo bhai',
            'title.unique' => 'Aavu title aavi gayu chhe already',
            'description.required' => 'A message is required',
        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $validator->errors()->add('description', 'Something is wrong with this field!');
        });
    }
    public function attributes()
    {
        return [
            'title' => 'Post title',
        ];
    }
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->slug),
        ]);
    }
}
