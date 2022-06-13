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
    <!-- <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet"> -->

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

    @include('layouts.partials.paths')

    <!-- Custom styles for this template -->
    <link href="{!! url(CSS.'/app.css') !!}" rel="stylesheet">
    <link href="{!! URL::asset(CSS.'/global.css') !!}" rel="stylesheet">
    <link href="{!! URL::asset(CSS.'/footer.css') !!}" rel="stylesheet">
    <link href="{!! URL::asset(CSS.'/main-nav.css') !!}" rel="stylesheet">
    <link href="{!! URL::asset(CSS.'/card.css') !!}" rel="stylesheet">
    <link href="{!! URL::asset(CSS.'/banner.css') !!}" rel="stylesheet">
    <link href="{!! URL::asset(CSS.'/breadcrumb.css') !!}" rel="stylesheet">
    <link href="{!! URL::asset(CSS.'/pagination.css') !!}" rel="stylesheet">
  </head>
  <body>
    <div id="wrapper">

      @include('layouts.partials.navbar')

      @include('layouts.partials.banner')

      @include('layouts.partials.flash-message')

      <main>
        <div class="container">
          @yield('content')
        </div>
      </main>
      
      <footer class="footer mt-5" role="contentinfo">
        @include('layouts.partials.footer')
      </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/bc4e126ee3.js" crossorigin="anonymous"></script>
    <script src="{!! url(JS.'bundle.js') !!}" type="text/javascript"></script>
  </body>
</html>