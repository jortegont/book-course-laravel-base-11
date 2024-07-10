@extends('dashboard.master')

@section('content')

    @include('dashboard.fragments._errors-form')

    <form action=" {{ route('category.update', $category->id) }} " method="POST">

        @method('PATCH')        
        @include('dashboard.category._form', [ 'task'=>'edit' ])
    </form>

@endsection