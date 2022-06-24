<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ProductType;         
use App\Models\Product;  
use Illuminate\Support\Facades\View;       
class AppServiceProvider extends ServiceProvider
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
        View::share('loai_sp', ProductType::all());
    }
}