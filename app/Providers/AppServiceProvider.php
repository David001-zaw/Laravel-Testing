<?php

namespace App\Providers;

use App\View\Components\Ui\Input;
use App\View\Components\Ui\Button;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('button', Button::class);
        Blade::component('input', Input::class);
        Blade::component('components.ui.badge', 'badge');

        Paginator::useBootstrap();
    }
}
