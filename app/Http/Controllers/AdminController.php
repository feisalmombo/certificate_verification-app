<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;
use App\User;
use App\Course;
use App\CourseResult;
use App\Faculty;
use App\University;
use App\UniversityStudent;
use Auth;
use DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user = User::latest('updated_at')->orderBy('occupation')->paginate(7);
        
        $counts=1;
        $users=Auth::user()->occupation;
        if (!Auth::user()) {
            # code...
            return redirect('/');
        }
    elseif(Auth::user() && $users!=1){
     return back();
     }
    //  dd($user);
    return view("dashboard.admin.index",compact('user','counts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=Auth::user()->occupation;
        if (!Auth::user()) {
            # code...
            return redirect('/');
        }
    elseif(Auth::user() && $user!=1){
     return back();
     }
     
    return view("dashboard.admin.create_user");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->occupation = 3;
        $user->password = bcrypt($request->password);
        
        $user->save();

       
        return redirect()->back()->with('message','Admin successful registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::latest('updated_at')->paginate(7);
        $counts=1;
        $user=Auth::user()->occupation;
        if (!Auth::user()) {
            # code...
            return redirect('/');
        }
    elseif(Auth::user() && $user!=1){
     return back();
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
    return view("dashboard.admin.edit_user",compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,user $user,$id)
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            ]);
        $user = User::findOrFail($id); 
        $user->update(Input::all());  
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        //  dd($user);
        $user->save();

       
        return redirect()->back()->with('message','changes are successfully updated!');
        // return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
    public function view_users(){
        
        $users = User::latest('updated_at')->paginate(7);
        $counts=1;
        $user=Auth::user()->occupation;
        if (!Auth::user()) {
            # code...
            return redirect('/');
        }
    elseif(Auth::user() && $user!=1){
     return back();
     }
     
    return view("dashboard.admin.view_users",compact('users','counts'));
    }
    public function view_courses(){
        
        $courses = Course::latest('updated_at')->paginate(7);
        $counts=1;
        $user=Auth::user()->occupation;
        if (!Auth::user()) {
            # code...
            return redirect('/');
        }
    elseif(Auth::user() && $user!=1){
     return back();
     }
     
    return view("dashboard.admin.view_courses",compact('courses','counts'));
    }
    
    public function view_faculties(){
        
        $faculties = Faculty::latest('updated_at')->paginate(7);
        $counts=1;
        $user=Auth::user()->occupation;
        if (!Auth::user()) {
            # code...
            return redirect('/');
        }
    elseif(Auth::user() && $user!=1){
     return back();
     }
     
    return view("dashboard.admin.view_faculties",compact('faculties','counts'));
    }
    public function universities(){
        
        $universities = University::latest('updated_at')->paginate(7);
        $counts=1;
        $user=Auth::user()->occupation;
        if (!Auth::user()) {
            # code...
            return redirect('/');
        }
    elseif(Auth::user() && $user!=1){
     return back();
     }
     
    return view("dashboard.admin.universities",compact('universities','counts'));
    }
    public function view_records(){
        $records=UniversityStudent::latest('updated_at')->paginate(7);
        $counts=1;
        return view('dashboard.admin.view_students_records',compact('records','counts'));
    }
    public function view_results(){
        $results=CourseResult::latest('updated_at')->paginate(7);
        $counts=1;
        return view('dashboard.admin.view_results',compact('results','counts'));
    }
}

