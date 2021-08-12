@extends('layouts.adminLayout')

@section('content')
    <h2 style="text-align: center; margin-bottom: 2rem">Resume Uploaded</h2>

    @if ($resume->count() > 0)

        <h1>Update Your CV</h1>

        <form action="{{ route('resume.update', $resume[0]->id) }}" method="POST" enctype="multipart/form-data"
            style="margin-top: 20px">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="resume" class="form-label">Resume</label>
                <input type="file" class="form-control" id="resume" name="resume">
            </div>

            <button type="submit" class="btn btn-primary" style="border-radius: 5rem; color: white;">Submit</button>
        </form>

    @else

        <h1>Add New Resume</h1>
        <form action="{{ route('resume.store') }}" method="POST" enctype="multipart/form-data" style="margin-top: 20px">
            @csrf
            <div class="mb-3">
                <label for="resume" class="form-label">Resume</label>
                <input type="file" class="form-control" id="resume" name="resume">
            </div>

            <button type="submit" class="btn btn-primary" style="border-radius: 5rem; color: white;">Submit</button>
        </form>

    @endif

@endsection
