<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Team;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'postsCount' => Post::count(),
            'teamsCount' => Team::count(),
        ]);
    }
}
