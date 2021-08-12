@extends('layouts.adminLayout')

@section('content')
    
    <form action="{{ route('education.update', $education->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf 
        @method("PUT")
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{ $education->name }}">
        </div>
        
        <div class="mb-3">
            <label for="where" class="form-label">Where the place</label>
            <input type="text" class="form-control" id="where" name="where" value="{{ $education->where }}">
        </div>

        <div class="mb-3">
            <label for="period" class="form-label">Period</label>
            <input type="text" class="form-control" id="period" name="period" value="{{ $education->period }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection