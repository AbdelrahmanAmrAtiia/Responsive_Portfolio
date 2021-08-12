@extends('layouts.adminLayout')

@section('content')
    <h2 style="text-align: center; margin-bottom: 2rem">Data in Qualification Section (Education) </h2>
    
    @if ($educations->count() > 0)
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">Where</th>
                    <th scope="col">Period</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($educations as $education)
                    <tr>
                        <th style="max-width: 90px" scope="row">{{ $education->name }}</th>
                        <td>{{ $education->where }}</td>
                        <td>{{ $education->period }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route("education.edit", $education->id) }}">
                                Edit Content
                            </a>
                
                            <form action="{{route('education.destroy',$education->id)}}" method="POST" class="float-left mr-2 delete-btn">
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
        <a href="{{ route('education.create') }}" class="btn btn-success" style="border-radius: 5rem; color: white;">
            Create New Education Information
        </a>
    @else
        <a href="{{ route('education.create') }}" class="btn btn-success" style="border-radius: 5rem; color: white;">
            Create New Education Information
        </a>
    @endif

@endsection
