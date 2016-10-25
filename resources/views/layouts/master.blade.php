<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        {{-- Yield the title if it exists, otherwise default to 'P3' --}}
        @yield('title','P3')
    </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,600" rel="stylesheet" type="text/css">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/edf8d2d607.js"></script>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')
  </head>
  <body>
    <div class="container">

      <section>
          {{-- Main page content will be yielded here --}}
          @yield('content')
      </section>

      <hr>
      <footer style="font-size:.8em">
        Built by Christian Saravia, &copy; {{ date('Y') }}. Source code: <a href="https://github.com/christiansaravia/p3"><i class="fa fa-github" aria-hidden="true"></i></a>
      </footer>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

  </body>
</html>
