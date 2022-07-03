<?php
namespace Jobinja\Djangoauth;

use Illuminate\Auth\AuthManager;
use Illuminate\Support\ServiceProvider;

class DjangoauthServiceProvider extends ServiceProvider
{
    /**
     * Boot method
     *
     * @return void
     */
    public function boot()
    {
        /** @var AuthManager $auth */
        $auth = $this->app['auth'];

        $auth->extend('djangoauth', function () {
            return new DjangoauthEloquentUserProvider(new DjangoauthHasher(), config('auth.model'));
        });

        $auth->extend('djangoauth_database', function () {
            return new DjangoauthDatabaseUserProvider(new DjangoauthHasher(), config('auth.table'));
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // TODO: Implement register() method.
    }
}