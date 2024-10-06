<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Validator::extend('max_file_size', function ($attribute, $value, $parameters, $validator) {
            $maxSize = $parameters[0] * 1024;
            return $value->getSize() <= $maxSize;
        });

        Validator::replacer('max_file_size', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':max', $parameters[0], $message);
        });
    }
}
