@extends('layouts.adminLayout')

@section('content')
    <h2 style="text-align: center; margin-bottom: 2rem">Data in Messages Section </h2>
    
    @if ($messages->count() > 0)
      
        @foreach ($messages as $message)
            <div class="card text-center">
                <div class="card-header">
                    Sender Name: {{ $message->name }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">Email: {{ $message->email }}</h5>
                    <p class="card-text">Project / company Name: {{ $message->company }}</p>
                    <p>
                        {{ $message->message }}
                    </p>
                    <form action="{{route('message.destroy',$message->id)}}" method="POST" class="float-left mr-2 delete-btn">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">
                            Delete
                        </button>
                    </form>

                </div>
                <div class="card-footer text-muted">
                    {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $message->created_at)->addHours(2)->format('Y-m-d H:i:s'); }}
                    
                </div>
            </div>
        @endforeach
        
    @else
       
    @endif

@endsection
