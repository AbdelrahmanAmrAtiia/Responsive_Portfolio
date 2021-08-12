@extends('layouts.adminLayout')

@section('content')
    
    <form action="{{ route('skill.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf 
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
        </div>
        
        <div class="mb-3">
            <label for="number_years" class="form-label">Number Of Years in Exeperience</label>
            <input type="text" class="form-control" id="number_years" name="number_years">
        </div>

       

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection