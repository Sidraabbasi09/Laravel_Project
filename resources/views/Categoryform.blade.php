@extends('layouts.scaffold')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h4 class="text-center mb-4">Add New Category Here</h4>
            <form action="{{route('form')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Enter name">
                </div>
                <!-- Thumbnail Field -->
                <div class="form-group">
                    <label for="thumbnail">Thumbnail:</label>
                    <input type="file" class="form-control" id="thumbnail" value="{{old('thumbnail')}}"  name="thumbnail">
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
                <button type="submit" class="btn btn-primary">Submit</button>
               
            </form>
        </div>
    </div>
</div>
@endsection



