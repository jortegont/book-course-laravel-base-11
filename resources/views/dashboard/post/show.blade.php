@extends('dashboard.master')

@section('content')

    @include('dashboard.fragments._errors-form')

    <h1> {{ $post->title }} </h1>
    <span>
        {{ $post->posted }}
    </span>
    <span>
        {{ $post->category->title }}
    </span>
    <div>
        {{ $post->description }}
    </div>

    <div>
        {{ $post->content }}
    </div>

    <img src="/uploads/posts/{{ $post->image }}" alt=" {{ $post->title }} ">

    {{ $post->image }}
@endsection