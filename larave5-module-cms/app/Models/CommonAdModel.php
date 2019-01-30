<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CommonAdModel extends Model
{
    use SoftDeletes;

    const CODE = 1;

    const ON = 1;
    const OFF = 2;

    protected $table = 'common_ad';
    protected $guarded = [];

}
