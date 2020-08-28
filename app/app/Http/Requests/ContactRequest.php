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
            'title'   => ['required','max:40'],
            'text' => ['required','max:800'],
        ];
    }

    public function messages(){
        return [
            'title.required'  => '*件名を入力してください。',
            'title.max'       => '*件名は４０文字以内でお願いします。',
            'text.required'   => '*本文を入力してください。',
            'text.max'       => '*本文は８００文字以内でお願いします。',
        ];
    }

}
