<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
use App\ProductAcce;

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
        view()->composer('home.partials.nav',function($view){
            $loai_sp = ProductType::all();
            $view->with('loai_sp',$loai_sp);
            $loai_pk = ProductAcce::all();
            $view->with('loai_pk',$loai_pk);

        });


    }




}
