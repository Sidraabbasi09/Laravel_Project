@extends('layouts.scaffold')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h4 class="text-center mb-4">Edit Category</h4>
            <form action="{{ route('update', ['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}" placeholder="Enter name">
                </div>
                <!-- Thumbnail Field -->
                <div class="form-group">
                    <label for="thumbnail">Thumbnail:</label>
                    <input type="file" class="form-control" id="thumbnail" value="{{$category->thumbnail}}"  name="thumbnail">
                </div>
                <!-- Status Field -->
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select class="form-select" id="status" name="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Update</button>
               
            </form>
        </div>
    </div>
</div>
@endsection



