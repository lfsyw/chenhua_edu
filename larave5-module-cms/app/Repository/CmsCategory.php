<?php
namespace App\Repository;


use App\Models\CmsCategoryModel;

class CmsCategory extends BaseRepository
{
    public static function getTree()
    {
        $cates = CmsCategoryModel::get();
        return \App\Library\Tools\Arr::tree($cates->toArray(),'name','id','parent_id');
    }
}