@extends('user.master')

@section('userContent')
    <div class="container-fluid">
       <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-3">
                <div class="card shadow">
                    <div class="card-body">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->description }}</p>
                        <p>status : <span class="badge badge-primary p-1">{{ $post->status }}</span></p>
                    </div>
                </div>
            </div>
        @endforeach
       </div>
    </div>
@endsection
