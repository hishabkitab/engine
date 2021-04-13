<?php

namespace HishabKitab\Engine\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Laratrust\Models\LaratrustPermission;

class Permission extends LaratrustPermission
{
    use SoftDeletes;

    public $guarded = [];
}
