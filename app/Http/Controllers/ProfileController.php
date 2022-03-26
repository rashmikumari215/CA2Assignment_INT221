<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function index()
   {
      	return view('welcome');
   }
    public function uploadpage()
   {  	
   	return view('profiledetails');
   }
     public function store(Request $request)
   {
 		$data=new StudentsDetail();  	  
			$file=$request->file;
		        
	$filename=time().'.'.$file->getClientOriginalExtension();
		        $request->file->move('assets',$filename);
		        $data->file=$filename;
		        $data->name=$request->name;
		        $data->regno=$request->regno;
              $data->cgpa=$request->cgpa;
              $data->specialization=$request->specialization;
		        $data->save();
              return redirect()->back()->with('success','Details Uploaded!');
   }
   public function show()
   {
   	$data=StudentsDetail::all();
   	return view('show2',compact('data'));
   }
      public function download(Request $request,$file)
   {   	
       return response()->download(public_path('assets/'.$file));
   }


   
  //  public function view($id)
  //  {
  //  	$data=StudentsDetail::find($id);
  //  	return view('view2',compact('data'));
  //  } 
}
