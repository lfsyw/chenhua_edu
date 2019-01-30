<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admin\Common\OptionRequest;
use App\Models\CommonOptionModel;
use App\Repository\CommonOption;
use Illuminate\Http\Request;

class OptionController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['options'] = CommonOption::getAll();
        return $this->title('配置项管理')->tpl('admin.common.option.index')->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['fieldType'] = CommonOptionModel::$fieldType;
        return $this->title('添加配置项')->tpl('admin.common.option.create')->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OptionRequest $request)
    {
        CommonOption::createOption($request);
        return redirect()->route('option.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['fieldType'] = CommonOptionModel::$fieldType;
        $this->data['field'] = CommonOption::getOptionBy($id);
        return $this->title('编辑配置项')->tpl('admin.common.option.edit')->render();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        CommonOption::updateOption($request,$id);
        return redirect()->route('option.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CommonOptionModel::findOrFail($id)->delete();
        return $this->returnMsg();
    }

    public function updateValue(Request $request)
    {
        CommonOption::updateValue($request);
        return redirect()->route('option.index');
    }
}
