<?php

namespace Jobnomade\GeoAutoComplete\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jobnomade\GeoAutoComplete\GeoAutoComplete
 */
class GeoAutoComplete extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Jobnomade\GeoAutoComplete\GeoAutoComplete::class;
    }
}
