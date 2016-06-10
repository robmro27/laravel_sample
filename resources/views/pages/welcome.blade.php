@extends('layout')

@section('content')
    @unless ( empty( $people ) )
        There are people
    @endunless

    @foreach ( $people as $person )
        <li>{{ $person }}</li>
    @endforeach
@stop
