<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class requestTareas extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
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
                    'nom_tarea' => "required|unique:tareas|min:4"
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'nom_tarea' => "required|min:4|unique:tareas".$this->id
                ];
            }
            default:break;
        }
    }
}
