<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RoleUpdateRequest extends Request
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
            'name' => 'required|min:5|max:20',
            'display_name' => 'required|min:5|max:100',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Opp, you cannot remove your role name!!!',
            'name.min' => 'Opp, role name at least has 5 characters!!!',
            'name.max' => 'Opp, maximum characters of name must be at 20 !!!',
            'display_name.required' => 'Opp, you cannot remove your display name!!!',
            'display_name.min' => 'Opp, your display name at least has 5 characters!!!',
            'display_name.max' => 'Opp, maximum characters of display name must be at 100!!!'
        ];
    }
}
