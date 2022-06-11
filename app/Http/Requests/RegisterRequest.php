<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        return [

            //Should be in email format
            'email' => 'required|email:rfc,dns|unique:users,email',

            //Max 20 chars, unique
            'username' => 'required|unique:users,username|max:20',

            //Max 30 characters
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',

            //Adding rules for password. The explanation of this is shown at the frontend
            'password' => 'required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|min:8',
            'password_confirmation' => 'required|same:password'
        ];
    }
}
