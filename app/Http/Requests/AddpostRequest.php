<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddpostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:50',
            'full_text' => 'required|min:20'
        ];
    }

    public function attributes() {
        return[
            'name' => 'Title',
            'full_text' => 'Text'
        ];
    }

    // public function messages() {
    //     return [
    //         'name.required' => 'Поле Title является обязательным',
    //         'full_text.required' => 'Поле Text является обязательным'
    //     ];
    // }
}
