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
        //
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        Validator::resolve(function (array $data, array $rules, array $messages, array $customAttributes) {
            return new \App\Validator($this->translator, $data, $rules, $messages, $customAttributes);
        });
    }
}
