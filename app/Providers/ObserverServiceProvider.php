<?php

namespace App\Providers;

use App\Models\Post;
use App\Observers\PostObserver;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Post::observe(PostObserver::class);
    }
}
