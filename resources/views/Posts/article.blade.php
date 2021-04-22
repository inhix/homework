@extends('layouts.default')
@section('content')
    <article>
        <div class="row">
{{--            @foreach($post as $article)--}}
{{--                <h3>{{$article->title}}</h3>--}}
{{--                <p>Published on {{$article->created_at}}</p>--}}
{{--                <p2>{{$article->content}}</p2>--}}
{{--            @endforeach--}}
                <h3>{{$post['0']->title}}</h3>
                <p>Published on {{$post['0']->created_at}}</p>
                <p2>{{$post['0']->content}}</p2>
        </div>
        <a href="/">Вернуться на главную</a>
    </article>
@stop
