<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('superAdmin.dashboard');
    }
    public function review()
    {
        $reviews = Post::whereIn('status',['Active'])
                        ->whereIn('admin_approved',['pending'])
                        ->get();
        return view('superAdmin.review',compact('reviews'));
    }

    public function approved($id)
    {
        $approved = Post::find($id);
        $approved->admin_approved = 'approved';
        $approved->save();
        return redirect()->back();
    }

    public function reject($id)
    {
        $reject = Post::find($id);
        $reject->admin_approved = 'rejected';
        $reject->save();
        return redirect()->back();
    }

    public function approvedpost(){
        $approvedpost = Post::where('admin_approved','approved')->get();
        return view('superAdmin.approvedpost',compact('approvedpost'));
    }
}
