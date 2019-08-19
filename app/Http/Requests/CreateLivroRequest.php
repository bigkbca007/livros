<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLivroRequest extends FormRequest
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
        $now = (new \DateTime('now', new \DateTimeZone('America/Bahia')))->modify('+1 day')->format('Y-m-d');
        return [
            'desc_titulo' => 'required|max:100',
            'cod_autor' => 'required',
            'desc_isbn' => 'required|max:30',
            'desc_loja' => 'max:30',
            'desc_foto' => 'max:40',
        ];
    }
}
