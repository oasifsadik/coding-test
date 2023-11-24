@extends('admin.master')
@section('title')
    Create Post
@endsection

@section('adminContent')
<div class="container-fluid">
    <h1 class="text-left">Create Post</h1>
    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="form shadow p-4 rounded mt-3 ">
                <form action="{{ url('/admin/save') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Enter Your title">
                            @error('title')
                               <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Description</label> <br>
                        <textarea name="description" id="" cols="30" rows="5">{{ old('description') }}</textarea>
                            @error('description')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label class="" >Select Post Status</label>
                        <select class="custom-select mb-3" name="status">
                            <option selected disabled>Product Status</option>
                                <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                            @error('status')
                              <div class="text-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

