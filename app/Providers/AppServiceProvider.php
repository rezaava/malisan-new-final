<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;

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
        View::composer('admin.*', function ($view) {
            $image = null;
            if (Auth::check()) {
                $image = Image::where('sub_id', Auth::id())
                              ->where('type', 3)
                              ->first();
            }
            $view->with('sidebarImage', $image);
        });
    }
}
