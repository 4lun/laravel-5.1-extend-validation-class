<?php

namespace App\Providers;

use Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Validator::resolver(function ($translator, array $data, array $rules, array $messages, array $customAttributes) {
            return new \App\Validator($translator, $data, $rules, $messages, $customAttributes);
        });
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}
