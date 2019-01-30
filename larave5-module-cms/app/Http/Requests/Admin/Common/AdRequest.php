<?php

namespace App\Http\Requests\Admin\Common;

use App\Http\Requests\BaseRequest;

class AdRequest extends BaseRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'      => 'required|string|max:20',
            'sign'       => 'required|string|unique:common_ad,sign',
            'code'       => 'sometimes|nullable|string',
            'begin_at'   => 'required|date',
            'expired_at' => 'required|date',
            'status'     => 'sometimes|in:1'
        ];
    }

    public function attributes()
    {
        return [
            'title'      => '广告标题',
            'sign'       => '调用标识',
            'code'       => '广告代码',
            'begin_at'   => '起始时间',
            'expired_at' => '过期时间',
            'status'     => '广告状态',
        ];
    }
}
