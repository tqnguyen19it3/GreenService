<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\PostProjectModels;
use App\Models\PostServiceModels;
use App\Models\PostNewsModels;
use App\Models\ManageBannerModels;

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
        //
        view()->composer('*', function($view){

            $post_service_donut = PostServiceModels::all()->count();
            $post_news_donut = PostNewsModels::all()->count();
            $post_project_donut = PostProjectModels::all()->count();
            $banner_slider_donut = ManageBannerModels::all()->count();

            $view->with(compact('post_service_donut', 'post_news_donut', 'post_project_donut', 'banner_slider_donut'));

        });
        
    }
}
