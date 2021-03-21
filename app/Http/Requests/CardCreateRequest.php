<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CardCreateRequest extends FormRequest
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
        return [
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required|max:200',
            'image' => 'required',
            'price' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => 'Kategori',
            'title' => 'Başlık',
            'description' => 'Açıklama',
            'image' => 'Resim',
            'price' => 'Fiyat'
        ];
    }
}
