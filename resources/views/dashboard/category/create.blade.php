@extends('dashboard.master')

@section('content')

    @include('dashboard.fragments._errors-form')

    <form action=" {{ route('category.store') }} " method="POST">
        @include('dashboard.category._form')
    </form>

@endsection