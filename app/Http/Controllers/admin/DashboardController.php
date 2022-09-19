<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Post;
use App\Models\admin\Team;
use Illuminate\Http\Request;

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
