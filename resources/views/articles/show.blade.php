@extends('app')

@section('contain')

    <h1>{{$article->title}}</h1>

    <article>

        {{$article->body}}

    </article>

@endsection