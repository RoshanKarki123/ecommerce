<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\User;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       View::composer(['*'],function($view){
        $user=\Auth::user()?'roshan':'logged out';
        $auth=User::select('*')->get();
           $view->with('user',$user);
           $view->with('auth',$auth);

       });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
