<?php

namespace App\Http\Requests\Admin\Common;

use App\Http\Requests\BaseRequest;

class OptionRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title'      => 'required|min:2',
            'name'       => 'required|regex:/[a-zA-Z0-9_-]+/',
            'field_type' => 'required|in:input,textarea,radio',
            'order'      => 'required|numeric',
        ];
        if ($this->request->get('field_type') == 'radio') {
            $rules['field_value'] = 'required';
        }
        return $rules;
    }

    public function attributes()
    {
        return [
            'title'      => '中文名',
            'name'       => '配置项',
            'field_type' => '字段类型',
            'field_value'=> '字段修饰',
            'order'      => '排序',
        ];
    }
}
