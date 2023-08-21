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
            'name' => 'required|max:50',
            'link_repository' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'il nome del progetto è obbligatorio',
            'name.max' => 'il titolo non può essere più lungo di :max caraterri',
            'link_repository.required' => 'il link è obbligatorio'
        ];
    }
}
