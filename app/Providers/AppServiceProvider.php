<?php
namespace App\Providers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('unicode_text', function ($attribute, $value) {
            return preg_match('/^[\pL\pP\pN\pS\s]+$/u', $value);
        });
        Validator::extend('unicode_alpha', function ($attribute, $value) {
            return preg_match('/^[\pL\pP\pS\s]+$/u', $value);
        });
    }
    public function register()
    {
    }
}
