<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostUpdateRequest extends Request
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
            'title' => 'required|min:5|max:50',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Opp, you cannot remove your post name!!!',
            'title.min' => 'Opp, post name at least has 5 characters!!!',
            'title.max' => 'Opp, maximum characters of name must be at 100 !!!'
        ];
    }
}
