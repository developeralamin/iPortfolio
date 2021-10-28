<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Heading;

use App\Models\Intersted; 

class FrontendController extends Controller
{
    

	public function FrontPage()
	{
		 $this->data['logos']        = Logo::get();
		 $this->data['heading']      = Heading::all();
		 $this->data['intersteds']   = Intersted::all();
		  return view('portfolio_website',$this->data);
	}

   //End mehtod

	public function LogoSet()
	{
		 
	}
 

}
