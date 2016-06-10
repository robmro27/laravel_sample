@extends('layout')

@section('content')

    @foreach ($cards as $card)
        <div>{{ $card->name }}</div>
    @endforeach

@stop