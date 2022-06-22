<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    // public $id = 0;
    // public $auths =0;
    use AuthorizesRequests;
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        if(auth()->check()){
             view()->composer('*', function ($view) {
            $view->with([
                'data'=>User::where('id',auth()->id())->get(),
            ]);
         });
        }

        paginator::useBootstrap();
    }
}
