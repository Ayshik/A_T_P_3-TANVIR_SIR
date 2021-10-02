<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
   
    public function contact(){
        return view('pages.contact');
    }
    public function home(){
        return view('pages.home');
    }
    public function ourteam(){
        return view('pages.ourteam');
    }
    public function aboutus(){
        return view('pages.aboutus');
    }
    public function contactus(){
        return view('pages.contactus');
    }
    public function service(){
      
        $service = array("service 1","service 2","service 3","service 4");
        return view('pages.service')
        
        ->with('service',$service);
    }
}
