<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
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
        $id = $this->segment(3);

        return [
            'user_id' => 'required',
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|min:3|max:100|unique:products,name,'.$id,
            'description' => 'required|min:3|',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'images' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'É necessário estar autenticado',
            'category_id.required' => 'Selecione uma categoria',
            'category_id.exists' => 'Categoria inexistente',
            'name.required' => 'O campo nome é obrigatório',
            'name.unique' => 'Este nome já esta sendo utilizado',
            'name.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'name.max' => 'O campo nome precisa ter no máximo 100 caracteres',
            'description.required' => 'O campo descrição é obrigatório',
            'description.min' => 'O campo descrição precisa ter no mínimo 3 caracteres',
            'price.required' => 'O campo preço é obrigatório',
            'price.regex' => 'Formato do campo preço inválido',
        ];
    }
}
