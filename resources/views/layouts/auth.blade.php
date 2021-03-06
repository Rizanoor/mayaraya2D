<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>@yield('title')</title>

    {{-- style link --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

  </head>
  <body>
    {{-- {{ navbar }} --}}
    @include('includes.navbar-auth')

    {{-- page content --}}
    @yield('content')

    {{-- footer --}}
    {{-- @include('includes.footer') --}}

    {{-- script link --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

</body>
</html>
