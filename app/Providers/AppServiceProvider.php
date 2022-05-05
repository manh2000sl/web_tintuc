<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Topic;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;


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
//        Blade::if('admin', function () {
//            return auth()->user() ;
//        });
            Paginator::useBootstrap();

            $menuTop = Topic::all();
            View::share('menuTop',$menuTop);
            $title = 'Admin';
            View::share('title',$title);
            $postNews = Post::where('status', '=', '1')->with('toUser')->orderBy('id', 'desc')->paginate(8);
            View::share('postNews',$postNews);
            $posts = Post::where('highlight', '=', '1')->orderBy('updated_at', 'desc')->limit(4)->get();
            View::share('posts',$posts);

    }
}
