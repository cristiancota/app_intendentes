<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class update extends Request
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
            'num_inten' => "required",
            'nombre' => "required",
            'apellido' => "required",
            'cel'=>"required"

        ];
    }
}
