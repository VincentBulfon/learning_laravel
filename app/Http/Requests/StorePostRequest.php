<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            //si le champ a le meme nom que la column de la table il n'y a pas besoin de spécifier le nom de cette column dans les rules.@
            'title' => 'required|min:10|unique:posts',
            'body' => 'required|min:20'
        ];
    }
}
