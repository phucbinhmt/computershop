<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/^0\d{9,10}$/',
            'password' => 'required|min:8',
            'birthdate' => 'required|date|before:today',
            'gender' => 'required|in:0,1,2',
        ];
        
        if ($this->isMethod('POST')) {
            $rules += [
                'email' => 'required|email|unique:users,email',
                'agree_terms' => 'accepted',
            ];
        }
        
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.regex' => 'Số điện thoại không hợp lệ',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.unique' => 'Địa chỉ email đã tồn tại.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự.',
            'birthdate.date' => 'Ngày sinh không hợp lệ.',
            'birthdate.before' => 'Ngày sinh phải trước ngày hiện tại.',
        ];
    }
}
