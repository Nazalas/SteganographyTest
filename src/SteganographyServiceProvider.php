<?php

namespace Nazalas\Steganography;

use Illuminate\Support\ServiceProvider;

class SteganographyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('steganography', 'Nazalas\Steganography\Steganography');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
