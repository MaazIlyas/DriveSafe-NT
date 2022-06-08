<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>DriveSafe-NT</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    <link href="{!! URL::asset('assets/css/footer.css') !!}" rel="stylesheet">
    <link href="{!! URL::asset('assets/css/card.css') !!}" rel="stylesheet">
    <link href="{!! URL::asset('assets/css/banner.css') !!}" rel="stylesheet">
    <link href="{!! URL::asset('assets/css/pagination.css') !!}" rel="stylesheet">
  </head>
  <body>
      
      @include('layouts.partials.navbar')

      @include('layouts.partials.banner')

      @include('flash-message')
      <main>
        <div class="container">
          @yield('content')
        </div>
          
      </main>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
      <script src="https://kit.fontawesome.com/bc4e126ee3.js" crossorigin="anonymous"></script>
      <script src="{!! url('assets/js/bundle.js') !!}" type="text/javascript"></script>
      
      <footer class="footer" role="contentinfo">
        @include('layouts.partials.footer')
      </footer>
      </div>
    </body>
</html>