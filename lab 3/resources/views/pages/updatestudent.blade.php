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
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<h1>Update Student</h1>

<div class="container">
  <form action="/action_page.php">

  <label for="subject">Id</label>
    <input type="text" id="id" name="id" placeholder="id" value= "{{ $student->id }}">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."value= "{{ $student->name }}">

    <label for="lname">Phone No</label>
    <input type="text" id="phone" name="phone" placeholder="Phone No."value= "{{ $student->phone }}">

    <label for="country">Email</label>
    <input type="text" id="email" name="email" placeholder="email"value= "{{ $student->email }}">
   
    <label for="country">Dob</label>
    <input type="date" id="date" name="date" class="form-control" placeholder="date"value= "{{ $student->dob }}"><br>

   

    <input type="submit" value="Update">
  </form>
</div>
@endsection