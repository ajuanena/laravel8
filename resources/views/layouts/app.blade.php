
<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <title>Txingudi BHI</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Autentification">
      <meta name="author" content="ajuanenama">
      <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />

      <link rel="shortcut icon" href="{{ asset("favicon.png") }}" type="image/png">
      <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{ url("font-awesome/css/font-awesome.min.css") }}">

      <script src="{{asset('assets/lib/chartjs/Chart.bundle.min.js')}}"></script>

  </head>

  <body>
    @if(Auth::check())
        @include("elements.usernavbar")
    @else
        @include("elements.navbar")
    @endif

      <br><br><br><br>
      <main role="main" class="container">
          @if(session()->has('info'))
            <div class="container">
              <div class="alert alert-info">{{session('info')}}</div>
            </div>
          @endif
          @yield("content")
      </main>

  </body>
  <script src="{{asset('assets/js/jquery-3.2.1.slim.min.js')}}" ></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

</html>
