@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        
        <h1>Edit note</h1>
        
        <form method="POST" action="/notes/{{ $note->id }}">
            
            {{ method_field('PATCH') }}
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <textarea class="form-control" name="body">{{ $note->body }}</textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Update note</button>
            </div>
        </form>
    </div>    
</div>
@stop