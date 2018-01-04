<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\DataController as Data;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * Share Values with Views Without Controllers
         */

        View::composer('includes.data.top', function ($view) {
            $view->with(Data::topData());
        });

        View::composer('includes.table.cities', function ($view) {
            $view->with(["moneyCities" => Data::moneyCitiesTable(), "quantityCities" => Data::quantityCitiesTable()]);
        });

        View::composer('includes.table.last', function ($view) {
            $view->with(["requests" => Data::lastTable()]);
        });

        View::composer('includes.table.popular', function ($view) {
            $view->with(["moneyProducts" => Data::moneyPopularTable(), "quantityProducts" => Data::quantityPopularTable()]);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
