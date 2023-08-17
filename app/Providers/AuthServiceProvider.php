<?php

namespace App\Providers;

//use Illuminate\Support\Facades\Gate;
use App\AuthLibrary\CustomAuth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }

    public function register()
    {
        $this->app->singleton('customauth', function ($app) {
            return new CustomAuth();
        });
    }
}
