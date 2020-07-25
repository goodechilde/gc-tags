<?php

namespace Goodechilde\GcTags\Models;

use Goodechilde\CommonContact\Models\TagType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
     use SoftDeletes;

    protected $guarded = [ 'id' ];

    public function tagType(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(TagType::class, 'id', 'tag_type_id');
    }

    public function taggable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }
}
