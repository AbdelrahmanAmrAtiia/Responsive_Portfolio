@extends('layouts.adminLayout')

@section('content')
    <h2 style="text-align: center; margin-bottom: 2rem">Data in Contacts Section </h2>
    
    @if ( @isset($contact->mobile) && $contact->count() > 0)
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">mobile</th>
                    <th scope="col">email</th>
                    <th scope="col">location</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th style="max-width: 90px" scope="row">{{ $contact->mobile }}</th>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->location }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route("contact.edit", $contact->id) }}">
                            Edit Content
                        </a>
            
                        <form action="{{route('contact.destroy',$contact->id)}}" method="POST" class="float-left mr-2 delete-btn">
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
        <a href="{{ route('contact.create') }}" class="btn btn-success" style="border-radius: 5rem; color: white;">
            Create New Contact Information
        </a>
    @endif

@endsection
