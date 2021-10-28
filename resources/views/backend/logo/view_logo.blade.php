@extends('backend.index')

@section('content')


<div class="container col-12  align-center">
  <h4 class="card-header  text-center" style="background: #000000;color: white"> View Logo</h4>  <!-- Page Heading -->
             @if ( session()->get('message') )
                    <div class="alert alert-success" role="alert">
                       {{ session()->get('message') }}
                  </div>
                @endif
                      

  <table class="table table-bordered ">
    <thead>
      <tr>
        <th>SL</th>
        <th>Logo</th>
        <th>Actions</th>
  
      </tr>
    </thead>
    <tbody>

  @forelse($Viewlogo as $key=>$item)

      <tr>
        <td>{{ $key+1 }}</td>
        <td>
          <img width="120px" src="{{ url('/uploads/thumbnail/').'/'.$item->logo }}">
        </td>

        <td>
          <a target="__blank" href="" class="btn btn-rounded btn-success">View</a>
          <a href="{{ route('edit.logo.post',$item->id) }}" class="btn btn-rounded btn-primary">Edit</a>
          <a href="{{ route('delete.logo.post',$item->id) }}" class="btn btn-rounded btn-danger btn-outline" id="delete">Delete</a>
        </td>


      </tr>

   @empty

   <tr class="text-center">
     
     <td colspan="500">
       
       You haven't any logo 
     </td>
   </tr>

   @endforelse

    </tbody>


  </table>
 
</div>




@endsection