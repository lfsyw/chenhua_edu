<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommonOptionModel extends Model
{
    use SoftDeletes;

    const baseOption = 1; //网站基本配置

    public static $fieldType = [
        'input'    => 'input',
        'textarea' => 'textarea',
        'radio'    => 'radio'
    ];

    protected $table = 'common_option';
    protected $guarded = [];
}
