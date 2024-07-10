@extends('dashboard.master')

@section('content')

    @include('dashboard.fragments._errors-form')

    <form action=" {{ route('post.store') }} " method="POST">
        @include('dashboard.post._form')
    </form>

@endsection