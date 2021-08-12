@extends('layouts.adminLayout')

@section('content')
    
    <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf 
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection