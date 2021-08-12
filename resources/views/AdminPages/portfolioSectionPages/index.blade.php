@extends('layouts.adminLayout')

@section('content')
    <h2 style="text-align: center; margin-bottom: 2rem">Data in Portfolio Section </h2>
    
    @if ($ports->count() > 0)
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($ports as $port)
                    <tr>
                        <th><img src="{{ asset("storage/".$port->image) }}"  width="60px" height="60px" /> </th>
                        <td style="max-width: 90px" scope="row">{{ $port->name }}</td>
                        <td>{{ $port->description }}</td>
                        <td>{{ $port->link }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route("port.edit", $port->id) }}">
                                Edit Content
                            </a>
                
                            <form action="{{route('port.destroy',$port->id)}}" method="POST" class="float-left mr-2 delete-btn">
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
        <a href="{{ route('port.create') }}" class="btn btn-success" style="border-radius: 5rem; color: white;">
            Create New Project to Protfolio
        </a>
    @else
        <a href="{{ route('port.create') }}" class="btn btn-success" style="border-radius: 5rem; color: white;">
            Create New Project to Protfolio
        </a>
    @endif

@endsection
