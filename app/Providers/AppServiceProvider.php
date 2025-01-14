<?php

namespace App\Providers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrapFive();
        $dataCate = Category::orderByDesc('id')->get();

        $dataTag = Tag::orderByDesc('id')->get();

        $dataAuthor = Author::orderByDesc('id')->get();
        view()->share(compact('dataCate', 'dataTag', 'dataAuthor'));
    }
}
