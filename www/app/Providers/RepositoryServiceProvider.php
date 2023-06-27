<?php

namespace App\Providers;

use App\Repositories\MovieRepository;
use App\Repositories\NewsRepository;

use App\Repositories\PermissionRepository;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->singleton('role-repo', RoleRepository::class);
        $this->app->singleton('user-repo', UserRepository::class);
        $this->app->singleton('permission-repo', PermissionRepository::class);
        $this->app->singleton('news-repo', NewsRepository::class);
        $this->app->singleton('movie-repo', MovieRepository::class);
    }
}
