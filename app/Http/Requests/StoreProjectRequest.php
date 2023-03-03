<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'titolo' => ['required','unique:projects','max:60'],
            'descrizione' => ['required','max:150'],
            'type_id' => ['nullable','exists:types,id'],
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function messages()
    {
        return [
            'titolo.required' => 'Titolo obbligatorio',
            'titolo.unique' => 'Titolo già in uso',
            'titolo.max' => 'Carattere massimo :max',
            'descrizione.required' => 'Descrizione obbligatorio',
            'descrizione.max' => 'Carattere massimo :max',
            'type_id.exists' => 'Seleziona tipo'
        ];
    }
}
