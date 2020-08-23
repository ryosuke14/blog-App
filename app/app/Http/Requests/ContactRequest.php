<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'   => ['required','string','max:40'],
            'text' => ['required','string','max:800'],
        ];
    }

    public function messages(){
        return [
            'title.required'  => '件名を入力してください。',
            'title.string'    => '件名は文字列で入力して下さい',
            'title.max'       => '件名は４０文字以内でお願いします。',
            'text.required'   => '本文を入力してください。',
            'text.string'    => '本文は文字列で入力して下さい',
            'text.max'       => '本文は４０文字以内でお願いします。',
        ];
    }

}
