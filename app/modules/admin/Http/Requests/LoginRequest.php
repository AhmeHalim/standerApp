<?php

namespace Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'البريد الالكتروني مطلوب',
            'email.email' => 'ادخل عنوان بريد الكتروني صالح',
            'email' => 'error',
            'password.required' => 'كلمة المرور مطلوبه',
        ];
    }
}
