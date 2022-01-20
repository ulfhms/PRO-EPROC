<?php

namespace App\Providers;

use App\Models\Bank;
use App\Models\BidangUsaha;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator as PaginationPaginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //  \View::share([
        //      'bingus' => BidangUsaha::get(),
        //      'banks' => Bank::get(),
        //  ]);
        PaginationPaginator::useBootstrap();

    }
}
