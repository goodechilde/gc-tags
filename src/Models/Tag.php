<?php

namespace Goodechilde\GcTags\Models;

use Goodechilde\GcTags\Models\TagType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Tag extends Model
{
     use SoftDeletes;
     use Userstamps;

    protected $guarded = [ 'id' ];
    protected $with = ['tagType'];

    public function tagType(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(TagType::class, 'id', 'tag_type_id');
    }

    public function taggable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }
}
