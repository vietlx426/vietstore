<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestKeyword extends FormRequest
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
            'k_name' => 'required|unique:keywords,k_name'
        ];
    }
    public function messages()
    {
        return [
            'k_name.required' =>'Tên keyword không được trống',
            'k_name.unique' =>'Tên keyword đã tồn tại'
        ];
    }
}
