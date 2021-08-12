@extends('layouts.adminLayout')

@section('content')
    <h2 style="text-align: center; margin-bottom: 2rem">Data in Skill Details Section </h2>
    
    @if ($skillDetails->count() > 0)
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">percentage</th>
                    <th scope="col">Related To Skill Category</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($skillDetails as $detail)
                    <tr>
                        <th style="max-width: 90px" scope="row">{{ $detail->name }}</th>
                        <td>{{ $detail->percentage }}</td>
                        <td>{{ $detail->skill()->get()->first()->name }}</td>

                        <td>
                            <a class="btn btn-primary" href="{{ route("skillDetail.edit", $detail->id) }}">
                                Edit Content
                            </a>
                
                            <form action="{{route('skillDetail.destroy',$detail->id)}}" method="POST" class="float-left mr-2 delete-btn">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach

                
               
            </tbody>
        </table>
          <a href="{{ route('skillDetail.create') }}" class="btn btn-success" style="border-radius: 5rem; color: white;">
            Create New Skill Details Information
        </a>
    @else
        <a href="{{ route('skillDetail.create') }}" class="btn btn-success" style="border-radius: 5rem; color: white;">
            Create New Skill Details Information
        </a>
    @endif

@endsection
