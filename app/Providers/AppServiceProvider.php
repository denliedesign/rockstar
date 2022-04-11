<?php

namespace App\Providers;

use App\Models\Content;
use App\Models\Lesson;
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
//        View::share('lessons', Lesson::all());
//        View::share('contents', Content::all());
    }
}
