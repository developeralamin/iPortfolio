<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intersted; 
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;



class InterstedController extends Controller
{
   
	public function intersted(){

         $this->data['Intersted']  = Intersted::all();

         return view('backend.Intersted.view_Intersted',$this->data);

	}


	public function addintersted(){
      return view('backend.Intersted.add_Intersted');
	}


	public function interstedpost(Request $request){
			$request->validate([
              'title' => 'required|',                                      
                                                
         ]);

  	  

  		Intersted::insert([
  			'title'        =>$request->title,
  			
  			'created_at'   =>Carbon::now(),
  		]);

         Session::flash('message','Data Inserted Successfully');
  		 return redirect()->route('intersted');
	}




	public function editinterstedpost($id){
         $this->data['EdidIntersted']  = Intersted::findOrFail($id);

         return view('backend.Intersted.edit_Intersted',$this->data);
	}


	public function updateinterstedpost(Request $request , $id){
     Intersted::findOrFail($id)->update([
        'title'        =>$request->title,
        
        'created_at'   =>Carbon::now(),
      ]);

         Session::flash('message','Data Updated Successfully');
       return redirect()->route('intersted');
	}



	public function deleteinterstedpost($id){
    
      $delete = Intersted::findOrFail($id);

      $delete->delete();

       Session::flash('message','Data Delete Successfully');
       return redirect()->route('intersted');

}




}
