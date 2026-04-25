<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Requestc $request)
    {
        asim::create([
"name"=> $request->name,
"email"=> $request->email,
"password"=> $request->password,
"cpassword"=>$request->cpassword,
        ]);
        return "data inserted";
    }
    public function index(){
        $students = Student::all();
        return view ('students', compact('students'));
    }
}
