<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UsagerRequest extends FormRequest
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
            'email' => 'required',
            'nomUsager' => 'required|min:2',
            'nom' => 'required|min:2',
            'prenom' => 'required',
            'role' => 'required',
            'password' => 'required'
        ];
    }

    public function messages(){
        return [
            'nom.min' => 'Le nom doit avoir 2 caractères.'
        ];
    }
}
