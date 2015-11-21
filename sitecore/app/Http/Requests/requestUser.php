<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class requestUser extends Request
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
           // dd($this->password ." ". $this->c_password);

        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|confirmed|min:6',
                    'password_confirmation' => 'required|same:password'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => 'max:255',
                    'email' => 'required|email|max:255|unique:users,email,'.$this->id,
                    'password' => 'min:6|confirmed',
                    'password_confirmation' => 'same:password'
                ];
            }
            default:break;
        }







    }
}
