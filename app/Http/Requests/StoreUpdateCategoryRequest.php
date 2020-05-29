<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCategoryRequest extends FormRequest
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
            'name' => 'required|min:3|max:100|unique:categories,name,'.$id
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'É necessário estar autenticado',
            'name.required' => 'O campo nome é obrigatório',
            'name.unique' => 'Este nome já esta sendo utilizado',
            'name.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'name.max' => 'O campo nome precisa ter no máximo 100 caracteres',
        ];
    }
}
