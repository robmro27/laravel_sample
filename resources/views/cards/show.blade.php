@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $card->name }}</h1>

            <ul class="list-group">
            @foreach ( $card->notes as $note )
                <li class="list-group-item">
                    {{ $note->body }}
                    ID: {{ $note->user_id }}
                </li>
            @endforeach
            </ul>  
            
            <hr />
            <h3>Add a new note</h3>
            
            <form method="POST" action="/cards/{{ $card->id }}/notes">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea class="form-control" name="body">{{ old('body') }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Add note</button>
                </div>
            </form>
            
            @if (count($errors)) 
            <ul>
                @foreach( $errors->all() as $error )
                <li> {{ $error }} </li>
                @endforeach
            </ul>
            @endif
            
        </div>
    </div>
@stop