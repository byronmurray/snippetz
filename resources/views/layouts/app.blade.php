<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link href="{{ asset('/css/theme.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

  </head>
  <body>

    {{-- top nav --}}
    @include('layouts._navbar')

    <div class="container-fluid">
      <div class="row">
        {{-- sidebar nav --}}
        @include('layouts._sidebar')

        {{-- main body content --}}
        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          @yield('content')
        </main>

      </div>
    </div>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <script src="{{ asset('/js/ace/ace.js') }}" type="text/javascript" charset="utf-8"></script>
    <script>

      var editor;
      $('.editor').each(function( index ) {
        editor = ace.edit(this);
        editor.setTheme("ace/theme/monokai");
        editor.getSession().setMode('ace/mode/php');
      });

      var textarea = $('textarea[name="snippet"]');
          editor.getSession().on("change", function () {
          textarea.val(editor.getSession().getValue());
      });

    </script>

  </body>
</html>
