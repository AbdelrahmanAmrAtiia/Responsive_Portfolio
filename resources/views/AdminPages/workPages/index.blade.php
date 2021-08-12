@extends('layouts.adminLayout')

@section('content')
    <h2 style="text-align: center; margin-bottom: 2rem">Data in Qualification Section (Work) </h2>
    
    @if ($works->count() > 0)
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

                @foreach ($works as $work)
                    <tr>
                        <th style="max-width: 90px" scope="row">{{ $work->name }}</th>
                        <td>{{ $work->where }}</td>
                        <td>{{ $work->period }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route("work.edit", $work->id) }}">
                                Edit Content
                            </a>
                
                            <form action="{{route('work.destroy',$work->id)}}" method="POST" class="float-left mr-2 delete-btn">
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
        <a href="{{ route('work.create') }}" class="btn btn-success" style="border-radius: 5rem; color: white;">
            Create New Work Information
        </a>
    @else
        <a href="{{ route('work.create') }}" class="btn btn-success" style="border-radius: 5rem; color: white;">
            Create New Work Information
        </a>
    @endif

@endsection
