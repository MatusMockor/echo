<?php

namespace App\Observers;

use App\Models\admin\Post;

class PostObserver
{
    public function updating(Post $post)
    {
        $post->slug = \Str::slug($post->title);
    }
}
