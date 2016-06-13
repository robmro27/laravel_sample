@extends('layout')

@section('content')

    @include('flash')
    
    @unless ( empty( $people ) )
        There are people
    @endunless

    @foreach ( $people as $person )
        <li>{{ $person }}</li>
    @endforeach
@stop
