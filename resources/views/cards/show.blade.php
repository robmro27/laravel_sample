@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{ $card->name }}</h1>

            <ul class="list-group">
            @foreach ( $card->notes as $note )
                <li class="list-group-item">{{ $note->body }}</li>
            @endforeach
            </ul>  
            
            <hr />
            <h3>Add a new note</h3>
            
            <form method="POST" action="/cards/{{ $card->id }}/notes">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <textarea class="form-control" name="body"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Add note</button>
                </div>
            </form>
            
        </div>
    </div>
@stop