<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\StorePostRequest;
use App\Models\Post;
use App\Services\UploadService;

class PostController extends Controller
{
    protected UploadService $uploadService;

    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::orderBy('created_at')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->slug = \Str::slug($request->title);
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;

        // Todoo
        $post->save();

        if ($request->file('image')) {
            $this->uploadService->saveFile($post, $request->file('image'));
        }

        return to_route('dashboard')
            ->with('flashMessage', 'Post was saved')
            ->with('flashMessageType', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Post $post, StorePostRequest $request)
    {
        $post->update($request->validated());

        return to_route('posts.index')
            ->with('flashMessage', 'Post was updated')
            ->with('flashMessageType', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('dashboard')
            ->with('flashMessage', 'Post was deleted')
            ->with('flashMessageType', 'success');
    }
}
