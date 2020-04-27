<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            // 'lastName'=> ['required', 'string', 'regex:[\w]'],
            // 'firstName'=> ['required', 'string', 'regex:[\w]'],
            'email' => ['required','email']
        ];
    }

    public function messages()
    {
        return [
            'email.required'=> 'Thêm email đi bố',
            'email.email'=> 'Đéo phải email'

        ];
    }
}
