<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    {{-- <header>
        Header 2
    </header> --}}
    @if (session('status'))
        {{ session('status') }}        
    @endif

    @yield('content')

   <section>
        @yield('morecontent')
   </section>

</body>
</html>