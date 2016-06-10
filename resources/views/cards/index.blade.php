@extends('layout')

@section('content')

    <h1>Cards</h1>

    <ul class="list-group">
    @foreach ($cards as $card)
        <li class="list-group-item"><a href="/cards/{{ $card->id }}">{{ $card->name }}</a></li>
    @endforeach
    </ul>

@stop