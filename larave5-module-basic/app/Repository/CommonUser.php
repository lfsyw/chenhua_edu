<?php
namespace App\Repository;

use App\Models\CommonUserModel;

class CommonUser extends BaseRepository
{
    public static function getUsersWithPage($num = self::LIST_PRE_PAGE)
    {
        return CommonUserModel::orderBy('id','DESC')->paginate($num);
    }


    public static function updateUser($data,$id)
    {
        $userInfo = [
            'name'=>$data->name,
        ];

        if($data->password){
            $userInfo['password'] = bcrypt($data->password);
        }

        return CommonUserModel::where('id',$id)->update($userInfo);
    }
}