<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>laravel-Boolean</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

  </head>
  <body>
      <div class="container">
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
      </div>
  </body>
</html>
