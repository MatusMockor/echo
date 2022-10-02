<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    public function updating(Post $post)
    {
        $post->slug = \Str::slug($post->title);
    }
}
