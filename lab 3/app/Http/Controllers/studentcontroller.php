<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentcontroller extends Controller
{
    public function addstudent(){
        return view('pages.addstudent');
    }

    public function poststudent(Request $request){
        //using requests validate method
        /*$validate = $request->validate([
                'name'=>'required|min:5|max:10',
                'id'=>'required',
                'dob'=>'required',
                'email'=>'email'
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 2 charcters'
            ]
        );*/
        //using class validate method
        $this->validate(
            $request,
            [
                'name'=>'required|min:5|max:10|regex:/^[A-Za-z]+$/',
                'id'=>'required',
                'dob'=>'required',
                'email'=>'email',
                'phone'=>'required|min:11|max:11|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 2 charcters',
                'phone.min'=>'phone must be 11 charcters',
                'phone.max'=>'phone must be 11 charcters',
                'email'=>'Email not in valid format'
            ]
        );

        $var = new Student();
        $var->name= $request->name;
        $var->id = $request->id;
        $var->email = $request->email;
        $var->phone=$request->phone;
        $var->dob = $request->dob;
        $var->save();

        $students = Student::all();


        //return "Successfully added";    
        return view('pages.studentinfo')->with('students',$students);  
    }
    public function showstudent(){
        /*$students = array();
        for($i=0;$i<10;$i++){
            $student=array(
                "name"=>"Student ".($i+1),
                "id" =>($i+1),
                "dob" =>"12.12.12"
            );
            $students[] = (object)$student;
        }*/
        $students = Student::all();
        return view('pages.studentinfo')->with('students',$students);
    }

    public function update(Request $request){
        $id = $request->id;
        $student = Student::where('id',$id)->first();
        return view('pages.updatestudent')->with('student',$student);  
    }





}
