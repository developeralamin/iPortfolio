<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use File; // For File

class LogoController extends Controller
{
   
   public function Logo()
   {
         $this->data['Viewlogo'] = Logo::all();
         return view('backend.logo.view_logo',$this->data);
   }
//end method




	public function addlogo(){
		return view('backend.logo.add_logo');
	}

//end method


	public function logopost(Request $request){

		 $request->validate([
        'logo'         => 'required',                   
        ]);


      if($request->hasFile('logo')){
         $currentDate = Carbon::now()->toDateString();

      	$image = $request->file('logo');
      	 $ext = time().'.'.$image->getClientOriginalExtension();
       Image::make($image)->save(public_path('/uploads/thumbnail/'.$ext)); 
     
  $Logo =Logo::insert([
          'logo'    => $ext,
         'created_at'  => Carbon::now(),
	     ]);


     }//End 1st if conditon

    
      Session::flash('message','Data Inserted Successfully');
	    return back();




	}

//end method

	public function editlogopost(){

	}

//end method

	public function updatelogopost(){

	}
//end method


	public function deletelogopost($id){

		  $product  = Logo::findOrFail($id);
      $image_path = public_path('/uploads/thumbnail/'.$product->logo);

      if(file_exists($image_path)){
        File::delete($image_path);
      }

      $product->delete();

      Session::flash('warning','Logo Deleted Successfully');
      return redirect()->back();
	}



}
