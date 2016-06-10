@extends('layout')

@section('content')

    @foreach ($cards as $card)
        <a href="/cards/{{ $card->id }}">{{ $card->name }}</a>
    @endforeach

@stop