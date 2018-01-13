@extends('app')

@section('contain')

    <h1>Articles</h1>

    <hr/>

    @foreach($articles as $article)
    <article>
        <h2>
          <a href="{{action('ArticlesController@show', [$article->id])}}">  {{$article->title}} </a>
            <br>
            {{$article->body}}
            <br>
        </h2>
    </article>
    @endforeach
@endsection
