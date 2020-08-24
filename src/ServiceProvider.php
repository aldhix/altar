<?php

namespace Aldhix\Altar;

use Illuminate\Support\ServiceProvider as Service;
use Illuminate\Support\Facades\Blade;

class ServiceProvider extends Service
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views/components', 'component');

        $this->publishes([
            __DIR__.'/views/altar' => resource_path('views/altar'),
            __DIR__.'/controllers' => app_path('/Http/Controllers'),
            __DIR__.'/public' => public_path('/'),
        ]);
        
        Blade::include('altar.layouts.navbar', 'altNavbar');
        Blade::include('altar.layouts.sidebar', 'altSidebar');
        Blade::include('altar.layouts.footer', 'altFooter');
        Blade::include('altar.layouts.sidebar.brand', 'altSidebarBrand');
        Blade::include('altar.layouts.sidebar.user', 'altSidebarUser');
        Blade::include('altar.layouts.sidebar.menu', 'altSidebarMenu');

        Blade::component('component::sidebar.menu','alt-sidebar-menu');
        Blade::component('component::sidebar.submenu','alt-sidebar-submenu');
        Blade::component('component::action','alt-action');
        Blade::component('component::alert','alt-alert');
        Blade::component('component::button','alt-button');
        Blade::component('component::form-card','alt-form-card');
        Blade::component('component::input','alt-input');
        Blade::component('component::select','alt-select');
        Blade::component('component::table','alt-table');
        Blade::component('component::tabs-card','alt-tabs-card');
        Blade::component('component::textarea','alt-textarea');
    }
}