<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TagUpdateRequest extends Request
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
            'name' => 'required|unique:tags,name,' . $this->id
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Opp, tag name already taken',
            'name.required' => 'Opp, you cannot remove your tag name!'
        ];
    }
}
