<?php

namespace App\Providers;

use App\Repositories\TweetRepository;
use App\Repositories\TweetRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind( TweetRepositoryInterface::class , TweetRepository::class );
    }
}
