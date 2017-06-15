<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request
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
            'name' => 'required|unique:categories|min:5|max:20'
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Opp, category name already taken',
            'name.required' => 'Opp, you forgot your category name!!!',
            'name.min' => 'Opp, category name at least has 5 characters!!!',
            'name.max' => 'Opp, maximum characters of category name must be at 20 !!!'
        ];
    }
}
