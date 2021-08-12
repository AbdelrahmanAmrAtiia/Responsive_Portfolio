@extends('layouts.adminLayout')

@section('content')
    <h2 style="text-align: center; margin-bottom: 2rem">Data in About Section </h2>
    
    @if ( @isset($about->description) && $about->count() > 0)
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Description</th>
                    <th scope="col">number of years</th>
                    <th scope="col">number of projects</th>
                    <th scope="col">number of companies</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="max-width: 90px" scope="row">{{ $about->description }}</th>
                    <td>{{ $about->number_years }}</td>
                    <td>{{ $about->number_projects }}</td>
                    <td>{{ $about->number_companies }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route("about.edit", $about->id) }}">
                            Edit Content
                        </a>
            
                        <form action="{{route('about.destroy',$about->id)}}" method="POST" class="float-left mr-2 delete-btn">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                               Delete
                            </button>
                        </form>

                    </td>
                </tr>
               
            </tbody>
        </table>
    @else
        <a href="{{ route('about.create') }}" class="btn btn-success" style="border-radius: 5rem; color: white;">
            Create New About Information
        </a>
    @endif

@endsection
