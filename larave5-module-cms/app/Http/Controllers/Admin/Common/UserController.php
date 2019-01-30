<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admin\Common\UserRequest;
use App\Models\CommonUserModel;
use App\Repository\CommonUser;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function index()
    {
//        $title = '用户列表';
        $this->data['users'] = CommonUser::getUsersWithPage();
//        return view('admin.common.user.index',compact('users','title'));
        return $this->title('用户列表')->tpl('admin.common.user.index')->render();
    }

    public function edit($id)
    {
        $this->data['field'] = CommonUserModel::findOrFail($id);
        return $this->title('编辑用户')->tpl('admin.common.user.edit')->render();
    }

    public function update(UserRequest $request, $id)
    {
        CommonUser::updateUser($request,$id);
        return redirect()->route('admin.common.user.index');
    }

    public function destroy($id)
    {
        CommonUserModel::findOrFail($id)->delete();
        return $this->returnMsg();
    }
}
