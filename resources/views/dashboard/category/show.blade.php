@extends('dashboard.master')

@section('content')

    @include('dashboard.fragments._errors-form')

    <h1> {{ $category->title }} </h1>


@endsection