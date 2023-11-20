<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            "titre"=>"required",
            "duree"=>"required",
            "annee"=>"required",
            "photo"=>"required|image|mimes:png,jpg,jpeg,gig|max:4096",
            "rating"=>"required",
            "realisateur"=>"required",
            "producteur"=>"required",
            "categorie"=>"required",
            "resume"=>"required"
        ];
    }
}
