<?php

namespace App\Providers;

use App\Models\Setup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        // $setup = Setup::where('id',1)->first();
        // if(isset($setup)){
        //   View::share('setup',$setup);   
        // }   
    }
}
