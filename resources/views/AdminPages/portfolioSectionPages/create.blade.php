@extends('layouts.adminLayout')

@section('content')
    
    <form action="{{ route('port.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf 
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" class="form-control" id="link" name="link">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection