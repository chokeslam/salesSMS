<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function new(Request $request){

    	Student::create($request->all());
        return redirect('home');
    }

    public function continue(Request $request){

    	Student::create($request->all());
        return redirect('create');
    }
}
