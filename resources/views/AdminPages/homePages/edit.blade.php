@extends('layouts.adminLayout')

@section('content')
    
    <form action="{{ route('admin.update', $home->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf 
        @method("PUT")
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{ $home->title }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="description" name="description">
                {{ $home->description }}
             </textarea>
        </div>

        <div class="mb-3">
            <label for="linkedin_link" class="form-label">LinkedIn Account</label>
            <textarea type="text" class="form-control" id="linkedin_link" name="linkedin_link">
                {{ $home->linkedin_link }}
            </textarea>
        </div>

        <div class="mb-3">
            <label for="github_link" class="form-label">Github Account</label>
            <textarea type="text" class="form-control" id="github_link" name="github_link"> 
                {{ $home->github_link }}
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection