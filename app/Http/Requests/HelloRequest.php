<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'confirm')
        {
            return true;
        }else{
        return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'photo' => 'file|image',
            'coment' => 'filled',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'タイトルをつけてください。',
            'photo.image' => '画像を選択してください。',
            'coment.filled' => '店名・場所・感想などを残しましょう。',
        ];
    }
}
