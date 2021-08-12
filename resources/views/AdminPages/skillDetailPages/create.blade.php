@extends('layouts.adminLayout')

@section('content')
    
    <form action="{{ route('skillDetail.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf 

        <br />
        <select class="selectsector" id="sectorSelect" name="skill_id" >
            <option value=""> -- Please select Skill --</option>
            @foreach ($skills as $skill)
                <option value="{{ $skill->id }}" name="skill_id" >{{ $skill->name }}</option>
            @endforeach
        </select>
        <br />
        <br />

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
        </div>
        
        <div class="mb-3">
            <label for="percentage" class="form-label">Percentage</label>
            <input type="text" class="form-control" id="percentage" name="percentage">
        </div>

       

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection