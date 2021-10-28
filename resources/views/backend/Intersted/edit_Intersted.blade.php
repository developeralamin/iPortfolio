 @extends('backend.index')

@section('content')


 <!-- Begin Page Content -->
              
<div class="container col-12  align-center">

                @if ( session()->get('message') )
                    <div class="alert alert-success" role="alert">
                       {{ session()->get('message') }}
                  </div>
                @endif


  <h4 class="card-header  text-center" style="background: #000000;color: white">Add Heading </h4>
  <form action="{{ route('update.intersted.post',$EdidIntersted->id) }}" method="post" enctype="multipart/form-data">

   @csrf

  <div class="row">
    <div class="col-12">  

    <div class="row"> {{-- /// 1st row --}}

    <div class="col-md-6" >   
        <div class="form-group">
          <label for="email">Heading Title:</label>
          <input type="text"  value="{{ $EdidIntersted->title }}" class="form-control" id="title" placeholder="Intersted Name" name="title">


     <font style="color: red">
          {{ ($errors->has('title'))?($errors->first('title')):'' }}
       </font>

        </div>
     </div>

 
     



</div> {{-- /// End 3rd row --}}
 <button type="submit" class="btn btn-success">Submit</button>

</div>

</div>
    
   

  </form>

</div>

@endsection