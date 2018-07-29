<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //###############################//
        //###########BACKEND#############//
        //###############################//
        //icon tab for backend
        view()->composer('admin.layouts.app', function($setting) {
            $setting->with('setting', \App\Setting::first());
        });

        view()->composer('admin.layouts.navs', function($setting) {
            $setting->with('setting', \App\Setting::first());
        });


        //######################################//
        //#########FRONT END Butterfly############//
        //######################################//
        //setting for frontend butterfly
        view()->composer('frontend.theme.butterfly.layouts.master', function($setting) {
            $setting->with('setting', \App\Setting::first());
        });

        //######################################//
        //##########USER     BACKEND############//
        //######################################//
        view()->composer('admin_user.layouts.nav', function($setting) {
            $setting->with('setting', \App\Setting::first());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
