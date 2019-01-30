<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admin\Common\LinkRequest;
use App\Models\CommonLinkModel;
use App\Repository\CommonLink;
use Illuminate\Http\Request;

class LinkController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['links'] = CommonLink::getAllFriendLink();
        return $this->title('友情链接列表')->tpl('admin.common.link.index')->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->title('添加友情链接')->tpl('admin.common.link.create')->render();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LinkRequest $request)
    {
        CommonLink::createFriendLink($request);
        return redirect()->route('admin.common.link.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['field'] = CommonLinkModel::find($id);
        return $this->title('编辑友情链接')->tpl('admin.common.link.edit')->render();
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
        CommonLink::updateLink($request,$id);
        return redirect()->route('admin.common.link.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CommonLinkModel::findOrFail($id)->delete();
        return $this->returnMsg();
    }
}
