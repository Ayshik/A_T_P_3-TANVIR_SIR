<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    </head>
    <body>
   <center> <h1>This is the Service Page</h1></center>
        <a class="btn btn-primary" href="{{route('home')}}">home</a>
        <table>
            @foreach($service as $n)
            <tr><td>{{$n}}</td></tr> 
            @endforeach
        </table>
        
       
    </body>
</html>