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
  <form action="{{ route('update.headning.post',$Editheadings->id) }}" method="post" enctype="multipart/form-data">

   @csrf

  <div class="row">
    <div class="col-12">  

    <div class="row"> {{-- /// 1st row --}}

    <div class="col-md-6" >   
        <div class="form-group">
          <label for="email">Heading Title:</label>
          <input type="text"  value="  {{ $Editheadings->title }}"   class="form-control" id="title" placeholder="Title Name" name="title">


     <font style="color: red">
          {{ ($errors->has('title'))?($errors->first('title')):'' }}
       </font>

        </div>
     </div>

  <div class="col-md-6" >   
        <div class="form-group">
          <label for="email">Sub Title</label>
          <input type="text" value="  {{ $Editheadings->subtitle }}"  class="form-control" id="subtitle" placeholder="subtitle" name="subtitle">


     <font style="color: red">
          {{ ($errors->has('subtitle'))?($errors->first('subtitle')):'' }}
       </font>

        </div>
     </div>

      <div class="col-md-6" >   
        <div class="form-group">
          <label for="email">Sub Sub Title</label>
          {{-- <input type="text"  class="form-control" id="sub_subtitle" placeholder="sub subtitle" name="sub_subtitle"> --}}
   <textarea  type="text"  class="form-control" id="Editheadings" placeholder="sub subtitle" name="sub_subtitle">
       {{ $Editheadings->Editheadings }}
   </textarea>

     <font style="color: red">
          {{ ($errors->has('sub_subtitle'))?($errors->first('sub_subtitle')):'' }}
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