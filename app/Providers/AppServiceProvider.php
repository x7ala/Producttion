<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        view()->composer('*', function ($view) {

        $system_categories = DB::table('systems')
                                 ->orderBy('sort_order', 'asc')
                                 ->get();

        $service_categories = DB::table('services')
                                 ->orderBy('sort_order', 'asc')
                                 ->get();

        $view->with('system_categories', $system_categories)->with('service_categories', $service_categories);

        });
    }
}
