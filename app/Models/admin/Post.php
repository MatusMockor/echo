<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\admin\Post
 *
 * @property string $title
 * @property string $slug
 * @property string $section
 * @property string $excerpt
 * @property string $body
 * @property string $image
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'section',
        'excerpt',
        'body',
        'image',
    ];
}
