<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post()
    {
        return view('admin.post.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'          => 'required',
            'description'    => 'required',
            'status'         => 'required',
        ]);
        $post = new Post();
        $post->title         = $request->title;
        $post->description   = $request->description;
        $post->status        = $request->status;
        $post->save();
        return redirect()->back();

    }

    public function show()
    {
        $posts = Post::get();
        return view('admin.post.allPost',compact('posts'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.post.edit',compact('post'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title'          => 'required',
            'description'    => 'required',
            'status'         => 'required',
        ]);
        $post = Post::find($id);
        $post->title                 = $request->title;
        $post->description           = $request->description;
        $post->status                = $request->status;
        $post->admin_approved        = 'pending';
        $post->update();
        return redirect('/admin/list');
    }

    public function detele($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
}
