<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
   
    public function contact(){
        return view('contact');
    }
    public function home(){
        return view('home');
    }
    public function ourteam(){
        return view('ourteam');
    }
    public function aboutus(){
        return view('aboutus');
    }
    public function contactus(){
        return view('contactus');
    }
    public function service(){
      
        $service = array("service 1","service 2","service 3","service 4");
        return view('service')
        
        ->with('service',$service);
    }
}
