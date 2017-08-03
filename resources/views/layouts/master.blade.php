
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="International Conference on Infrastructural Development in Africa">
    <meta name="author" content="OGD Developers">
    <link rel="icon" href="{{ asset ('images/diamond.ico') }}">

    <title>ICIDA | International Conference on Infrastructural Development in Africa</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/offcanvas/offcanvas.css') }}" rel="stylesheet">
  </head>

  <body>

@extends('layouts.nav')

<div class="container"><!--/body.container-->

  @yield('content')



</div><!--/body.container-->    

      <hr>
<div class="container"><!--/footer.container-->
    @extends('layouts.footer')
</div><!--/footer.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    




    <script>window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset ('/js/ie10-viewport-bug-workaround.js') }}"></script>
    <script src="{{ asset ('/js/offcanvas/offcanvas.js') }}"></script>
  </body>
</html>
