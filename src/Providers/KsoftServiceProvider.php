<?php

namespace Ksoft\Ksoft\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class KsoftServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerViews();
        $this->registerComponents();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if (!defined('KSOFT_PATH')) {
            define('KSOFT_PATH', realpath(__DIR__ . '/../'));
        }
    }

    protected function registerViews()
    {
        $this->loadViewsFrom(KSOFT_PATH . '/resources', 'ksoft');
    }

    protected function registerComponents()
    {
        Blade::component('ksoft::modal', 'modal');

    }

}
