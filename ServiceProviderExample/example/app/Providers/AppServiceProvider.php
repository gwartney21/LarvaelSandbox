<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  App\billing\paymentGateWay;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->bind(paymentGateWay::class,function($app){
            return new paymentGateWay('usd');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
