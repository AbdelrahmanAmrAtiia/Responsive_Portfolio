@extends('layouts.adminLayout')

@section('content')
    <h2 style="text-align: center; margin-bottom: 2rem">Data in Home Section </h2>
    
    @if ( @isset($homes->title) && $homes->count() > 0)
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">title</th>
                    <th scope="col">Description</th>
                    <th scope="col">linkedin Account</th>
                    <th scope="col">Github Account</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $homes->title }}</th>
                    <td style="max-width: 90px">{{ $homes->description }}</td>
                    <td>{{ $homes->linkedin_link }}</td>
                    <td>{{ $homes->github_link }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route("admin.edit", $homes->id) }}">
                            Edit Content
                        </a>
            
                        <form action="{{route('admin.destroy',$homes->id)}}" method="POST" class="float-left mr-2 delete-btn">
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
        <a href="{{ route('admin.create') }}" class="btn btn-success" style="border-radius: 5rem; color: white;">
            Create New Home Information
        </a>
    @endif

@endsection
