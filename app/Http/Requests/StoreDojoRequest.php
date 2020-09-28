<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreDojoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
                'nombre' => 'required|string|unique:dojos|max:30|',
                'titular' => 'required|string',
                'estado' => ['required', 'string' , 
                    Rule::in(['Zacatecas', 'Aguascalientes', 'San Luis', 'Durango'])]
        ];
    }
}
