@extends('layout')

@section('content')
    <h1>{{ $card->name }}</h1>
    
    @foreach ( $card->notes as $note )
        <div>{{ $note->body }}</div>
    @endforeach
    
@stop