<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Parametrage;
use App\Produit;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         $parametrage = Parametrage::first();
         $provisoires = Produit::where('active',1)->where('provisoire', 1)->get();
         view()->share(['parametrage' => $parametrage, 'provisoires' => $provisoires]);
    
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
