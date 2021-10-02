@extends('layouts.body')
@section('content')

   <center> <h1>This is the Service Page</h1></center>
       
        <center><table>
            @foreach($service as $n)
            <tr><td>{{$n}}</td></tr> 
            @endforeach
        </table></center>
        
        @endsection