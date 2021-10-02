@extends('layouts.body')
@section('navbar')
<a class="btn btn-primary" href="{{route('home')}}">home</a>
        <a class="btn btn-primary" href="{{route('service')}}">SerVice</a>
        <a class="btn btn-denger" href="{{route('service')}}">Add Student</a>
        <a class="btn btn-denter" href="{{route('service')}}">Show Students</a>
        <a class="btn btn-primary" href="{{route('ourteam')}}">Our Team</a>
        <a class="btn btn-primary" href="{{route('aboutus')}}">About us</a>
        <a class="btn btn-primary" href="{{route('contactus')}}">contact us</a>
@endsection
       
   