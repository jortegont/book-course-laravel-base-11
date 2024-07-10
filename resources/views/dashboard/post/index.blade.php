@extends('dashboard.master')

@section('content')

<a href="{{ route('post.create') }}" target="_BLANK">Nuevo</a>
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
                Posted
            </td>

            <td>
                Category
            </td>

            <td>
                Opciones
            </td>

            </tr>


        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        {{ $post->id }}
                    </td>

                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        {{ $post->posted }}
                    </td>
                    <td>
                        {{ $post->category->title }}
                    </td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}">Mostrar</a>
                        <a href="{{ route('post.edit', $post->id) }}">Editar</a>
                        <a href="{{ route('post.show', $post->id) }}">Mostrar</a>
                        <form action=" {{ route('post.destroy', $post->id) }} " method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
   </table>

   {{ $posts->links() }}

@endsection