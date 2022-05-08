<?php

namespace App\Providers;

use App\Models\Country;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View as View;

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
        $countries = Country::all();
        view()->share('countries', $countries);
    }
}
