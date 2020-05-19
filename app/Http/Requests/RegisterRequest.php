<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => 'required|unique:users|min:8',
            'email' => 'required|email|unique:users', // nhập đúng định dạng, có tồn tại trong hệ thống.
            'password' => 'required|min:8', //bắt buộc tối thiểu 8 kí tự
        ];
    }
    public function messages(){
        return [
           // 'key' => 'value'
           // 'username.required' => 'Xin hãy nhập tên đăng nhập',
           // 'username.min' => 'Tên đăng nhập có chiều dài 8 kí tự trở lên',
           // 'username.unique' => 'Tên bạn chọn đã có người sử dụng, vui lòng nhập tên khác',
           // 'email.required' => 'Xin nhập Email',
           // 'email.email' => 'Hãy nhập đúng định dạng email',
           // 'email.unique' => 'Email của bạn đã có người sử dụng, vui lòng nhập email khác',
           // 'password.required' => 'Nhập Password',
           // 'password.min' => 'Password có chiều dài 8 kí tự trở lên',
        ];
    }
}
