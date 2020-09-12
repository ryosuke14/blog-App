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
            'email'=> ['required', 'email'],
            'name' => ['required'],
            'title'=> ['required', 'max:40'],
            'text' => ['required', 'max:800'],
        ];
    }

    public function messages(){
        return [
            'email.required'   => '*メールアドレスを入力して下さい。',
            'email.email'      => '*正しいメールアドレスを入力して下さい',
            'name.required'   => '*ニックネームを入力して下さい。',
            'title.required'  => '*件名を入力してください。',
            'title.max'       => '*件名は４０文字以内でお願いします。',
            'text.required'   => '*本文を入力して下さい。',
            'text.max'        => '*本文は８００文字以内でお願いします。',
        ];
    }

}
