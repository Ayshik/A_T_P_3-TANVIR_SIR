@extends('layouts.body')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
    border-radius: 53px;
    background-color: #e1f5fe;
    padding: 22px;
}
}
</style>
</head>
<body>

<center><h1>ADD STUDENT</h1>

<div class="container">
  <form action="{{route('addstudent')}}" method="post">
  {{csrf_field()}}
 
    <label for="fname">Student Name</label>
    @error('name')
               <br><span style="font-weight:bold" class="text-danger">{{$message}}</span>
            @enderror
    <input type="text" id="fname" name="name" placeholder="Student name.."value= "{{old('name')}}">
  
   

    <label for="subject">Id</label>
    @error('id')
              <br>  <span style="font-weight:bold" class="text-danger">{{$message}}</span>
            @enderror
    <input type="text" id="id" name="id" placeholder="id" value= "{{old('id')}}">

   

    <label for="lname">Phone No</label>
    @error('phone')
               <br> <span style="font-weight:bold" class="text-danger">{{$message}}</span>
            @enderror
    <input type="text" id="phone" name="phone" placeholder="Phone No."value= "{{old('phone')}}">

    

    <label for="country">Email</label>
    @error('email')
               <br> <span style="font-weight:bold" class="text-danger">{{$message}}</span>
            @enderror
    <input type="text" id="email" name="email" placeholder="email"value= "{{old('email')}}">
   
   
            
            <span>Date of Birth</span>
            @error('dob')
                <br><span style="font-weight:bold"class="text-danger">{{$message}}</span>
            @enderror
            <input type="date" name="dob" value="{{old('dob')}}" class="form-control"><br>
       
    

   

    <input type="submit" value="Add Student">
  </form>
</div>

@endsection