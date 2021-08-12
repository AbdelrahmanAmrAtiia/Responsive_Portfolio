@extends('layouts.adminLayout')

@section('content')
    <h2 style="text-align: center; margin-bottom: 2rem">Data in Skills Section </h2>
    
    @if ($skills->count() > 0)
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">number of years</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($skills as $skill)
                    <tr>
                        <th style="max-width: 90px" scope="row">{{ $skill->name }}</th>
                        <td>{{ $skill->number_years }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route("skill.edit", $skill->id) }}">
                                Edit Content
                            </a>
                
                            <form action="{{route('skill.destroy',$skill->id)}}" method="POST" class="float-left mr-2 delete-btn">
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
        <a href="{{ route('skill.create') }}" class="btn btn-success" style="border-radius: 5rem; color: white;">
            Create New Skill Information
        </a>
    @else
        <a href="{{ route('skill.create') }}" class="btn btn-success" style="border-radius: 5rem; color: white;">
            Create New Skill Information
        </a>
    @endif

@endsection
