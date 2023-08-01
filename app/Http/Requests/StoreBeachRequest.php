<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBeachRequest extends FormRequest
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
            "name" => 'unique:beach_resorts|required|max:100|min:4|string',
            "location" => 'required|max:100|min:4|string',
            "num_umbrellas" => 'required|max:200|min:5|integer',
            "num_sunbeds" => 'required|max:200|min:5|integer',
            "umbrella_price" => ['required', 'regex:/^(\d+(\.\d*)?)|(\.\d+)$/'],
            "opening_date" => 'required|date|',
            "closing_date" => 'required|date|after:opening_date',
            "has_beach_volley" => 'required|in:Available,Not Available',
            "has_soccer_field" => 'required|max:100|min:5|string',
        ];
    }
    public function messages(){
        return [
            "name.unique" => "Il nome del resort è già utilizzato.",
            'umbrella_price.decimal' => 'il prezzo deve avere almeno due cifre e due numeri decimali',
            "name.required" => "Il nome del resort è obbligatorio.",
            "name.max" => "Il nome del resort non può superare i 100 caratteri.",
            "name.min" => "Il nome del resort deve contenere almeno 4 caratteri.",
            "name.string" => "Il nome del resort deve essere una stringa.",
            "location.required" => "La posizione del resort è obbligatoria.",
            "location.max" => "La posizione del resort non può superare i 100 caratteri.",
            "location.min" => "La posizione del resort deve contenere almeno 4 caratteri.",
            "location.string" => "La posizione del resort deve essere una stringa.",
            "closing_date.after" => "la data di chiusura deve essere dopo quella di apertura",
            'has_beach_volley.in' => 'inserire una dato valido fra i seguenti: Available o Not Available'
        ];
    }
}
