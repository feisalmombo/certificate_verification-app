<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\UniversityStudent;


class UniversityAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::user()->occupation!=2){
            return back();
            }
           return view("dashboard.university_admin.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function upload_results(){
        return view('dashboard.university_admin.upload_results');
    }
    public function view_records(){
        $records=UniversityStudent::latest('updated_at')->paginate(7);
        $counts=1;
        return view('dashboard.university_admin.view_students_records',compact('records','counts'));
    }
    public function post_results(Request $request){
        
    }
    public function post_excel_records(Request $request){
        $this->validate(request(),[
            'results' => 'required',
            ]);
        $records= $request->all();
        $resultData=[];
        if (isset($_FILES['results']['name']) && $_FILES['results']['name'] !='' ) {
            # code...
            $accept_ext=array('xml');
            $file_data=explode('.',$_FILES['results']['name']);
            $file_ext=end($file_data);
            if (in_array($file_ext,$accept_ext)) {
                    # code...
                    
                    $xml_data=simplexml_load_file($_FILES['results']['tmp_name']);
                    // dd(count($xml_data));
                    foreach ($xml_data as $column) {
                        # code...
                        $importexcel= UniversityStudent::create([
                            'first_name'=>$column->first_name,
                            'middle_name'=>$column->middle_name,
                            'last_name'=>$column->last_name,
                            'gender'=>$column->gender,
                            'year_admitted'=>$column->year_admitted,
                            'year_completed'=>$column->year_completed,
                            'index_number'=>$column->index_number,
                            'form_4_index_number'=>$column->form_4_index_number,
                            'form_6_index_number'=>$column->form_6_index_number,
                            'diploma_index_number'=>$column->diploma_index_number,
                            'degree_programme'=>$column->degree_programme,
                            'gpa'=>$column->gpa,
                            'score'=>$column->score,
                            'university_id'=>Auth::user()->university,
                            'birth_date'=>$column->birth_date,
                            'citizenship'=>$column->citizenship,
                            
            
                        ]); 
                        
                            
                    }
                    if(! empty($importexcel)){
                        return redirect()->back()->with('message','Data inserted to the database successful');
                
                        }
                        else{
                        return redirect()->back()->with('message','nothing inported');
                
                        }
                }
                elseif ($file_ext=="csv") {
                    // $data=$request->all();
                    $fileName = $_FILES["results"]["tmp_name"];
                    
                    if ($_FILES["results"]["size"] > 0) {
                        
                        $file = fopen($fileName, "r");
                        while (($column = fgetcsv($file, 1000000, ",")) !== FALSE) {
                        $importexcel= UniversityStudent::create([
                        'first_name'=>$column[1],
                        'middle_name'=>$column[2],
                        'last_name'=>$column[3],
                        'gender'=>$column[4],
                        'year_admitted'=>$column[5],
                        'year_completed'=>$column[6],
                        'index_number'=>$column[7],
                        'form_4_index_number'=>$column[8],
                        'form_6_index_number'=>$column[9],
                        'diploma_index_number'=>$column[10],
                        'degree_programme'=>$column[12],
                        'gpa'=>$column[13],
                        'score'=>$column[11],
                        'university_id'=>Auth::user()->university_id,
                        'birth_date'=>$column[14],
                        'citizenship'=>$column[15],
                        

                            ]); 
                            
                            
                        }
                        if (! empty($importexcel)) {
                            $type = "success";
                            return redirect()->back()->with('message','Data inserted to the database successful');
                            
                        } else {
                            $type = "error";
                            $message = "Problem in Importing CSV Data";
                            return redirect()->back()->with('message',$message);

                        }
                    }

                }
                else {
                    $message = "Only csv and xml files are allowed";

                    return redirect()->back()->with('message',$message);
                    
                }
                    
        }
        $message = "Only csv and xml files are allowed";

                session()->flash('message',$message);
                return redirect()->back();   

    }

}
