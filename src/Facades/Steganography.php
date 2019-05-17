<?php

namespace Nazalas\Steganography\Facades;

use Illuminate\Support\Facades\Facade;

class Steganography extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'steganography';
    }
}