<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\student_info;
use Auth;

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
        $user_id = Auth::user()->id;
        // dd("haha");
        $student_info = student_info::where('user_id',$user_id)->first();
        // dd($student_info);
        if(is_null($student_info)){
            return redirect()->route('student_info.create');
        }
        // $haha = User::find($user_id);
        // dd($haha->student_info->cgpa);
        return view('homess');
    }
}
