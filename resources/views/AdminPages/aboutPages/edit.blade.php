@extends('layouts.adminLayout')

@section('content')
    
    <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf 
        @method("PUT")
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="description" aria-describedby="emailHelp" name="description">
                {{ $about->description }}
            </textarea>
        </div>

        <div class="mb-3">
            <label for="number_years" class="form-label">Number of Experience Years</label>
            <input type="text" class="form-control" id="number_years" name="number_years" value="{{ $about->number_years }}">
        </div>

        <div class="mb-3">
            <label for="number_projects" class="form-label">Number of Completed Projects</label>
            <input type="text" class="form-control" id="number_projects" name="number_projects" value="{{ $about->number_projects }}">
        </div>

        <div class="mb-3">
            <label for="number_companies" class="form-label">Number of Companies</label>
            <input type="text" class="form-control" id="number_companies" name="number_companies" value="{{ $about->number_companies }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection