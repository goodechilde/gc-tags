<?php

namespace Goodechilde\GcTags\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TagType extends Model
{
     use SoftDeletes;

    protected $guarded = [ 'id' ];
    //
}
