<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->name;
        $query = Student::select('id','name','class','school','department','phone','status','date')->where('admin',$user)->get();
        return view('home' , compact('query','user'));

    }

    public function paid(){
        
        $user = Auth::user()->name;
        $query = Student::select('id','name','class','school','department','phone','status','date')
        ->where('status','Y')
        ->where('admin',$user)
        ->get();
        return view('home' , compact('query','user'));
    
    }

    public function unpaid(){
        
        $user = Auth::user()->name;
        $query = Student::select('id','name','class','school','department','phone','status','date')
        ->where('status','N')
        ->where('admin',$user)
        ->get();
        return view('home' , compact('query','user'));
    
    }

    public function signup(){
        
        $user = Auth::user()->name;
        $query = Student::select('id','name','class','school','department','phone','status','date')
        ->where('status','S')
        ->where('admin',$user)
        ->get();
        return view('home' , compact('query','user'));
    
    }


    public function create(){

        date_default_timezone_set('Asia/Taipei');

        $user = Auth::user()->name;

        $date = date("Y-m-d");

        return view('create',compact('date','user'));
    
    }

    public function Transfer()
    {
        $user = Auth::user()->name;
        $query = Student::select('id','name','class','school','department','phone','status','date')->where('class','轉學考')->get();
        return view('home' , compact('query','user'));

    }

    public function Engineering()
    {
        $user = Auth::user()->name;
        $query = Student::select('id','name','class','school','department','phone','status','date')->where('class','工研')->get();
        return view('home' , compact('query','user'));

    }

    public function Business()
    {
        $user = Auth::user()->name;
        $query = Student::select('id','name','class','school','department','phone','status','date')->where('class','商研')->get();
        return view('home' , compact('query','user'));

    }

}
