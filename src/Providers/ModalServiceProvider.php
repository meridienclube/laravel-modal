<?php

namespace ConfrariaWeb\Modal\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ModalServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'modal');
        Blade::component('modal::components.modal', 'modal');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

}
