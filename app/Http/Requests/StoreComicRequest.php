<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|unique:comics,title',
            'series' => 'min:5',
            'type' => 'required|min:3',
            'image' => 'active_url',
            'price' => 'required|numeric|min:0.90',
            'sale_date' => 'required|date|after:1890-01-01',
            'description' => '|min:5|max:255',
    
        ];
    }

        /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages() {
        return [
            'title.required' => 'Il titolo non può essere vuoto',
            'title.min' => 'Il titolo deve essere più lungo di 5 caratteri',
            'title.unique' => 'Esiste già un comic con lo stesso titolo',
            'series.min' => 'La serie deve essere più lunga di 5 caratteri',
            'type.min' => 'Il tipo deve essere più lungo di 3 caratteri',
            'type.required' => 'Il tipo non può essere vuoto',
            'image.active_url' => 'Inserisci un link valido',
            'price.required' => 'Il prezzo non può essere vuoto',
            'price.numeric' => 'Inserisci un prezzo valido',
            'price.min' => 'Il prezzo deve essere superiore ai 90 centesimi',
            'sale_date.required' => 'La data di pubblicazione non può essere vuota',
            'sale_date.date' => 'Inserisci una data valida',
            'sale_date.after' => 'La data inserita è troppo vecchia',
            'description.min' => 'La descrizione deve essere lunga tra i 5 e i 255 caratteri',
            'description.max' => 'La descrizione deve essere lunga tra i 5 e i 255 caratteri',    
        ];
    }
}
