<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class requestIntendentes extends Request
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
            'num_inten' => "required|unique:intendentes,num_inten|min:2",
            'nombre' => "required|min:4",
            'apellido' => "required|min:4",
            'cel'=>"required|min:6"
        ];
    }
}
