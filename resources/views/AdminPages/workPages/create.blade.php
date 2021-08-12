@extends('layouts.adminLayout')

@section('content')
    
    <form action="{{ route('work.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf 
        <div class="mb-3">
            <label for="name" class="form-label">Employee Title</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
        </div>
        
        <div class="mb-3">
            <label for="where" class="form-label">Where the place</label>
            <input type="text" class="form-control" id="where" name="where">
        </div>

        <div class="mb-3">
            <label for="period" class="form-label">Period</label>
            <input type="text" class="form-control" id="period" name="period">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection