<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class requestPlanta extends Request
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
                    'nombre' => "required|unique:plantas|min:2"
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'nombre' => "required|min:2|unique:plantas,nombre,".$this->id
                ];
            }
            default:break;
        }
    }
}
