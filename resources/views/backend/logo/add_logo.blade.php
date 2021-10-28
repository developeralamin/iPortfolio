@extends('backend.index')

@section('content')




<div class="container col-11  align-center">

                @if ( session()->get('message') )
                    <div class="alert alert-success" role="alert">
                       {{ session()->get('message') }}
                  </div>
                @endif


 
  <form action="{{ route('logo.post') }}" method="post" enctype="multipart/form-data">

   @csrf

	<div class="row">
	

          <div class="col-md-6" >		
		    <div class="form-group">
		      <label for="email">Logo</label>
		      <input type="file" class="form-control" id="logo"  name="logo" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">


		 <font style="color: red">
		      {{ ($errors->has('logo'))?($errors->first('logo')):'' }}
		   </font>

		    </div>
		 </div>

	

    <div class="controls">
	 <img id="blah" alt="your image" width="400" height="400" src="{{url('uploads/no_image.jpg') }}" style="width: 300px;height: 300px;border: 1px solid #000000" alt="User Avatar"> 

	</div>


</div>


    
    <button style="margin-left: 5%;" type="submit" class="btn btn-success">Submit</button>

  </form>


</div>


@endsection
