<?php

namespace Edoc\EdocTracer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Edoc\EdocTracer\Skeleton\SkeletonClass
 */
class EdocTracerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'edoc-tracer';
    }
}
