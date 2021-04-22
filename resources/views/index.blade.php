@extends('layouts.default')
@section('content')
    @if($posts->count())
        @foreach($posts as $post)
            <article>
                <h2>{{$post->title}}</h2>
                <p>{{$post->description}}</p>
                <a href="post/{{$post->id}}">Читать далее...</a>
            </article>
            <hr>
        @endforeach
    @endif
@stop








