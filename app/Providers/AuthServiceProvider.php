<?php

namespace App\Providers;

use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

/**
 * Class AuthServiceProvider
 */
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        if (! $this->app->routesAreCached()) {
            Passport::routes(function ($router) {
                $router->forAccessTokens();
            }, ['prefix' => 'api/v1/oauth', 'as' => 'api.v1.']);
        }

        Passport::tokensExpireIn(
            now()->addMinutes(config('passport.tokens_lifetime.minutes_for_access', 60))
        );
        Passport::refreshTokensExpireIn(
            now()->addDays(config('passport.tokens_lifetime.days_for_refresh', 30))
        );
    }
}
