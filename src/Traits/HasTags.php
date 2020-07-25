<?php

namespace Goodechilde\GcTags\Traits;

use Goodechilde\GcTags\Models\Address;

trait HasTags
{
    public function tags()
    {
        return $this->morphMany(Tag::class, 'addressable');
    }
}
