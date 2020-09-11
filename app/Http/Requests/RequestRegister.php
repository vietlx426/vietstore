<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRegister extends FormRequest
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
            'email' => 'required|unique:users,email,'.$this->id,
            'phone' => 'required',
            'name' => 'required',
            'password' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Mail không được để trống',
            'email.unique' => 'Mail đã tồn tại',
            'phone.required' => 'SĐT không được để trống',
            'name.required' => 'Tên không được để trống',
            'password.required' => 'Mật khẩu không được để trống'
        ];
    }
}
