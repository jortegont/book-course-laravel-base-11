@extends('dashboard.master')

@section('content')

<a href="{{ route('category.create') }}" target="_BLANK">Nuevo</a>
   <table>
        <thead>
            <tr>
                <td>
                Id
            </td>

            <td>
                Title
            </td> 

            <td>
                Opciones
            </td>

            </tr>


        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        {{ $category->id }}
                    </td>

                    <td>
                        {{ $category->title }}
                    </td>

                    <td>
                        <a href="{{ route('category.show', $category->id) }}">Mostrar</a>
                        <a href="{{ route('category.edit', $category->id) }}">Editar</a>
                        <form action=" {{ route('category.destroy', $category->id) }} " method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
   </table>

   {{ $categories->links() }}

@endsection