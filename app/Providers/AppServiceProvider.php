<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\OnlineShop;
use App\Models\Product;
use App\Models\Quote;
use App\Models\Team;
use Illuminate\Support\ServiceProvider;
use View;

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
        View::composer('partials.gallery', function ($view) {
            $products = Product::where('is_best_seller', true)
                ->latest()
                ->take(4)
                ->get();

            $view->with('bestSellerProducts', $products);
        });

        view()->composer('partials.teams', function ($view) {
            $view->with('teams', Team::latest()->get());
        });


        view()->composer('partials.quote', function ($view) {
            $view->with('quotes', Quote::latest()->get());
        });


        view()->composer('partials.blogs', function ($view) {
            $view->with(
            'blogs',
                Blog::latest()->take(2)->get()
            );
        });


        view()->composer('partials.footer', function ($view) {
            $view->with(
                'onlineShops',
                OnlineShop::orderBy('name')->get()
            );
        });

    }
}
