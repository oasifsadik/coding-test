<?php

namespace App\Http\Controllers\User;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $posts = Post::where('admin_approved','approved')->get();
        return view('user.userDashboard',compact('posts'));
    }
}
