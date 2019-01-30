<?php

namespace App\Http\Requests\Admin\Common;

use App\Http\Requests\BaseRequest;

class LinkRequest extends BaseRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'       => 'required|string|max:20',
            'url'        => 'required|url',
            'remark'     => 'sometimes|nullable|string|max:200',
            'order'      => 'required|numeric',
            'expired_at' => 'required|date'
        ];
    }

    public function attributes()
    {
        return [
            'name'       => '友链名称',
            'url'        => 'URL',
            'remark'     => '备注',
            'order'      => '排序',
            'expired_at' => '过期时间'
        ];
    }
}
