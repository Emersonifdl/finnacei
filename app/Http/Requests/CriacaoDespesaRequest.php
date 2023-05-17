<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CriacaoDespesaRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'descricao' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'data' => 'required|date',
            // 'categoria_id' => 'required|exists:categorias,id',
        ];
    }
}
