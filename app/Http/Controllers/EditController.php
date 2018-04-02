<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function paid($id){
    	Student::where('id',$id)->update(['status'=>'Y']);
    	return redirect('home');
    }

    public function signup($id){
    	Student::where('id',$id)->update(['status'=>'S']);
    	return redirect('home');
    }
}
