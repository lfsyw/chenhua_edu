<?php
namespace App\Repository;

use App\Models\CommonAdModel;

class CommonAd extends BaseRepository
{
    public static function getAllWithPage($num = self::LIST_PRE_PAGE)
    {
        return CommonAdModel::orderBy('id','DESC')->paginate($num);
    }

    public static function createAd($data)
    {
        return CommonAdModel::create([
            'title'      => $data->title,
            'sign'       => $data->sign,
            'type'       => CommonAdModel::CODE, //代码类型
            'code'       => $data->code,
            'begin_at'   => $data->begin_at,
            'expired_at' => $data->expired_at,
            'status'     => $data->status ? CommonAdModel::ON : CommonAdModel::OFF,
        ]);
    }


}