<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CmsCategoryModel extends Model
{
    use SoftDeletes;

    protected $table = 'cms_category';
    protected $guarded = [];

    public static $status = [
        1=>'开启',
        2=>'关闭'
    ];

    public static $type = [
        1=>'普通',
        2=>'运营',
        3=>'其他'
    ];
}
