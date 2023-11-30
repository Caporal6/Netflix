<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActeurRequest extends FormRequest
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
            'nom' => 'required|min:2',
            'date_naissance' => 'required|date',
            'lieux' => 'required|max:100',
            'photo' => 'required|image|mimes:png,jpeg,jpg,gif|max:4096',
            'categorie' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nom.min' => 'Le nom doit avoir plus que 2 caractères',
            'photo.mimes' => 'Le type de fichier n\'est pas reconnu (png, jpg, gif).',
            'photo.max' => 'La taille du fichier est beaucoup trop grand.'


        ];
    }


}
