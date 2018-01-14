@extends('app')

@section('contain')
    <h1> Write a New Article </h1>
    <hr/>

    {!! Form::open() !!}
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name') !!}
    {!! Form::close() !!}
@endsection