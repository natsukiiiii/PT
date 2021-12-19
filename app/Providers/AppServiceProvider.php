<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Parsedown;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

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
        Blade::directive('markdown', function ($expression) {

            $markdown = view(
                str_replace('\'', '', $expression)
            )->render();

            $Parsedown = new \Parsedown();
            return $Parsedown->text($markdown);

        });
        // Paginator::defaultView('index');

        // Paginator::defaultSimpleView('index');
        if ($this->app->environment() === 'production') {
            \URL::forceScheme('https');
        }
        Schema::defaultStringLength(191);
    }
}
