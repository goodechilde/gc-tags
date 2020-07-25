<?php

namespace Goodechilde\GcTags;

use Illuminate\Support\Facades\Facade;

/**
 * @see
 */
class GcTagsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gc-tags';
    }
}
