@extends('layouts.scaffold')

@section('content')

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Categories</h2>
                <a href="{{route('categoform')}}" class="btn btn-primary">Add New Category</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <table id="category-table" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Thumbnail</th>
                                <th>Status</th>
                               <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td><img src="{{ asset('images/'.$category->thumbnail) }}" alt="" style="max-width: 100px; max-height: 100px;"></td>

                                    <td>{{ $category->status }}</td>
                                    
                                    <td>
                                       <div style="display:flex">
                                        <a href="{{route('editcategoform', $category->id)}}" class="btn btn-sm btn-primary me-3">Edit</a>
                                        {{-- <a href="{{route('destroy', $category->id)}}" class="btn btn-sm btn-danger ">Delete</a> --}}
                                        <form action="{{ route('destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-sm btn-danger" value="delete" />
                                        </form>
                                        
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
