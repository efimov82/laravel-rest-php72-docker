<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Video;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Video::creating(function ($video) {


           //$video->created_at = date('Y-m-d H:i:s');
           //$video->updated_at = date('Y-m-d H:i:s');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\L5Swagger\L5SwaggerServiceProvider::class);
    }
}
