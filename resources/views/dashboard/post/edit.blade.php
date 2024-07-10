@extends('dashboard.master')

@section('content')

    @include('dashboard.fragments._errors-form')

    <form action=" {{ route('post.update', $post->id) }} " method="POST" enctype="multipart/form-data">

        @method('PATCH')        
        @include('dashboard.post._form', [ 'task'=>'edit' ])
    </form>

@endsection