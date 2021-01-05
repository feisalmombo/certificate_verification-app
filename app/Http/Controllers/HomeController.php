<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;

use App\University;
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
        $universities=University::latest()->paginate(7);
        $user=Auth::user()->occupation;
        // dd($user);
        if($user == 1)
    {
       return redirect('/admin');
    }
    elseif($user == 2)
    {
        return redirect('/university_admin');
    }
    else{  
        
        return view('dashboard.user.home',compact('user','universities'));
    }
}
    public function verify(Request $request){

        $this->validate($request,[
            
        ]);
        
    }
}
