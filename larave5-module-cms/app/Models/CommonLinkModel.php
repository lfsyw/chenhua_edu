<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CommonLinkModel extends Model
{
    use SoftDeletes;

    const FRIEND_LINK = 1;

    protected $table = 'common_link';
    protected $guarded = [];

}
