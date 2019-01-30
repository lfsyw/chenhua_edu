<?php

namespace App\Http\Requests\Admin\Common;

use App\Http\Requests\BaseRequest;
use Illuminate\Support\Facades\Validator;
use Hash, Auth;

class UserRequest extends BaseRequest
{

    public function rules()
    {
        $this->extValidator();
        return [
            'name'                  => 'required',
            'password'              => 'nullable|string|min:6|confirmed',
            'password_confirmation' => 'nullable|string',
            'password_original'     => 'sometimes|string|check_password'
        ];
    }

    public function attributes()
    {
        return [
            'name'                  => '用户名',
            'password'              => '密码',
            'password_confirmation' => '确认密码',
            'password_original'     => '原密码'
        ];
    }

    public function messages()
    {
        return [
            'password_original.check_password' => ':attribute 不正确。'
        ];
    }

    public function extValidator()
    {
        Validator::extend('check_password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, Auth::user()->password);
        });
    }
}
