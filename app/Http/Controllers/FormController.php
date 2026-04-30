<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\khan;

class FormController extends Controller
{
    public function store(Request $request)
    {
       khan::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'cpassword' => $request->cpassword,
        ]);

        return 'data inserted';
    }
  public function index(){
    $students = khan::all();
    return view('data', compact('students'));
    }
}
