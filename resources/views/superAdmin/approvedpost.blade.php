@extends('superAdmin.master')

@section('superTitle')
    Approved Post
@endsection

@section('superContent')
<div class="container-fluid">
    <h1 class="">Approved Post</h1>
    <div class="row">
        <div class="col-md-10 offset-1">
            <table class="table table-striped ">
                <thead>
                    <tr>
                        <td>#sl</td>
                        <td>Title</td>
                        <td>description</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $sl = 1;
                    @endphp
                    @if (count($approvedpost)>0)
                    @foreach ($approvedpost as $post)
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                        </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="text-center text-danger" colspan="3">Posts Not Available</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
