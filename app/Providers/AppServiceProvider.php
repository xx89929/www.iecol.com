<?php

namespace App\Providers;

use App\Models\Pclassify;
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
        $ProClassifys = Pclassify::where('is_display',1)->get();
        view()->share('pro_classifys', $ProClassifys);
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
