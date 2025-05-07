<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            //
            'title' => 'required|min:5|max:255',
            'slug' => 'required|min:5|max:30|unique:posts',
            'category' => 'required|min:5|max:50',
            'content' => 'required|min:10',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "El campo :attribute es obligatorio.",
            'slug.required' => "El campo Slug es obligatorio.",
            'category.required' => "El campo Categoría es obligatorio.",
            'content.required' => "El campo Contenido es obligatorio.",
        ];
    }

    public function attributes()
    {
        return [
            'title' => "Titulo del Articulo",
        ];
    }
}
