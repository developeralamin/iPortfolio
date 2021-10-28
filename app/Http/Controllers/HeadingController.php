<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Heading; 
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;


class HeadingController extends Controller
{
    

		public function headning(){

         $this->data['headings']  = Heading::all();

         return view('backend.heading.view_adding',$this->data);


		}



		public function addheadning(){
			  return view('backend.heading.add_adding');
		}



		public function headningpost(Request $request){

		$request->validate([
              'title' => 'required|',                                      
              'subtitle' => 'required|',                                      
              'sub_subtitle' => 'required|',                                      
         ]);

  	  

  		Heading::insert([
  			'title'        =>$request->title,
  			'subtitle'     =>$request->subtitle,
  			'sub_subtitle' =>$request->sub_subtitle,
  			'created_at'   =>Carbon::now(),
  		]);

         Session::flash('message','Data Inserted Successfully');
  		 return redirect()->route('headning');



		}



		public function editheadningpost($id){
        $this->data['Editheadings']  = Heading::findOrFail($id);

         return view('backend.heading.edit_adding',$this->data);
		}



		public function updateheadningpost(Request $request ,$id){
       
      Heading::findOrFail($id)->update([
          'title'        =>$request->title,
          'subtitle'     =>$request->subtitle,
          'sub_subtitle' =>$request->sub_subtitle,
          'updated_at'   =>Carbon::now(),
      ]);

         Session::flash('message','Data Inserted Successfully');
       return redirect()->route('headning');


		}



		public function deleteheadningpost($id){

      $deleteheadningpost = Heading::findOrFail($id);

      $deleteheadningpost->delete();

      Session::flash('message','Data Inserted Successfully');
       return redirect()->route('headning');




		}





}
