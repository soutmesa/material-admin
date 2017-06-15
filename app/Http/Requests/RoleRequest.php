<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RoleRequest extends Request
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
            'name' => 'required|unique:roles|min:5|max:20',
            'display_name' => 'required|min:5|max:100',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Opp, role name already taken!!!',
            'name.required' => 'Opp, you forgot your role name!!!',
            'name.min' => 'Opp, role name at least has 5 characters!!!',
            'name.max' => 'Opp, maximum characters of name must be at 20 !!!',
            'display_name.required' => 'Opp, you forgot your display name!!!',
            'display_name.min' => 'Opp, your display name at least has 5 characters!!!',
            'display_name.max' => 'Opp, maximum characters of display name must be at 100!!!'
        ];
    }
}
