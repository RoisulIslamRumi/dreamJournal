<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials._head')
</head>

  <body>
      @include('partials._nav')
    
    <!-- main-content -->
    <div class="container">
       @yield('content')
    </div>
    <!--/.footer-bottom--> 
    @include('partials._javascript')
  </body>
</html>