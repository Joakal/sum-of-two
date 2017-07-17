<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\SumOfTwoInterface;
use App\Repositories\Mongo\SumOfTwoRepository;

use App\Repositories\MySQL\SumOfTwoInterface as MySQLInterface;
use App\Repositories\MySQL\SumOfTwoRepository as MySQLRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SumOfTwoInterface::class, SumOfTwoRepository::class);
        $this->app->singleton(MySQLInterface::class, MySQLRepository::class);
    }
}
