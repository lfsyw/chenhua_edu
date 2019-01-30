<?php
namespace App\Repository;

use App\Models\CommonLinkModel;

class CommonLink extends BaseRepository
{
    public static function createFriendLink($data)
    {
        return CommonLinkModel::create([
            'type'       => CommonLinkModel::FRIEND_LINK, //友情链接
            'name'       => $data->name,
            'url'        => $data->url,
            'order'      => $data->order,
            'expired_at' => $data->expired_at,
            'remark'     => $data->remark ?: '',
        ]);
    }

    public static function getAllFriendLink()
    {
        return CommonLinkModel::where('type',CommonLinkModel::FRIEND_LINK)->orderBy('order','ASC')->get();
    }

    public static function updateLink($data,$id)
    {
        return CommonLinkModel::where('id',$id)->update([
            'name'       => $data->name,
            'url'        => $data->url,
            'order'      => $data->order,
            'expired_at' => $data->expired_at,
            'remark'     => $data->remark ?: '',
        ]);
    }
}