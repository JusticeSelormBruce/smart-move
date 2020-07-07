<?php

namespace App\Providers;

use App\Post;
use App\University;
use App\User;
use Illuminate\Support\Facades\Session;
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
        view()->composer('*', function ($view) {

            $links = Session::get('routes');
            $admin = Session::get('admin');
            $all_users = User::all();
            $post = Post::all();
            $companies_all = University::all();
            $companies = $companies_all->take(5);
            $view->with(compact('links', 'admin', 'all_users', 'post', 'companies'));
        });
    }
}
