<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PermissionRequest extends Request
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
            'name' => 'required|unique:permissions|min:5|max:20',
            'display_name' => 'required|min:5|max:100',
        ];
    }

    public function messages()
    {
        return [
            'title.unique' => 'Opp, permission name already taken!!!',
            'title.required' => 'Opp, you forgot your permission name!!!',
            'title.min' => 'Opp, permission name at least has 5 characters!!!',
            'title.max' => 'Opp, maximum characters of name must be at 20 !!!',
            'display_name.required' => 'Opp, you forgot your permission diplay name!!!',
            'display_name.min' => 'Opp, permission diplay name at least has 5 characters!!!',
            'display_name.max' => 'Opp, maximum characters of diplay name must be at 100 !!!'
        ];
    }
}
