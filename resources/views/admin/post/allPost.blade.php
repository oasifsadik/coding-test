@extends('admin.master')
@section('title')
    All Post
@endsection
@section('adminContent')
<div class="container-fluid">
    <h1 class="text-left">All Posts</h1>
    <div class="row">
        <div class="col-md-10 offset-1">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <td>#sl</td>
                        <td>Title</td>
                        <td>description</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $sl = 1;
                    @endphp
                    @if (count($posts)>0)
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->status }}</td>
                            <td>
                                <a href="{{ url('/admin/edit',$post->id) }}" class="btn btn-primary btn-sm">edit</a>
                                <a href="{{ url('/admin/delete',$post->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="text-center text-danger" colspan="5">Posts Not Available</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
