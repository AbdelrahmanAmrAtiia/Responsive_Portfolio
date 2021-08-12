@extends('layouts.adminLayout')

@section('content')
    
    <form action="{{ route('port.update', $port->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf 
        @method("PUT")

        <img src="{{ asset("storage/".$port->image) }}"  width="200px" height="200px" />

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{ $port->name }}">
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $port->description }}">
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" class="form-control" id="link" name="link" value="{{ $port->link }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection