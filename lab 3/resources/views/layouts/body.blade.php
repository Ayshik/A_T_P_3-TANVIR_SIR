<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    </head>
    <body>
       
   <!-- @section('navbar')
    @show (NOT WORKING)

 @yield('navbar') NOT WORKING

 @include('navbar.navinclude') Working
-->
@include('navbar.navinclude')

        <div>
            @yield('content')
        </div>
 
    </body>
</html>