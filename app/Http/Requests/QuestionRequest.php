<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'title' => 'required|max:255',
            'text' => 'required',
        ];
    }
    public function messages()
    {
    return [
        'title.required' => 'タイトルは必須です。',
        'title.max'      => 'タイトルは255文字以内で記入してください。',
        'text.required'  => '内容は必須です。',
    ];
    }
}
