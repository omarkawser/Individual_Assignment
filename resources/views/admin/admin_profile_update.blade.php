@extends('welcome')

@section('content')




<div class="container">


<div class="row">
      <div class="col-lg-12 col-md-10 mx-auto">
    
            
    
        
    
        <hr> 

        <form action="{{URL::to('/update_admin/'.$admin_profile_update->id)}}"  method="post">

         @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label> Name</label>
              <input type="text" class="form-control" value="{{$admin_profile_update-> name}}" name="name" >
 
            </div>  
          </div>



          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label> Email</label>
              <input type="text" class="form-control" value="{{$admin_profile_update->email}}"   name="email"></textarea>
 
            </div>
          </div>
          <br>


          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" >Update</button>
          </div>
        </form>
      </div>
    </div>




</div>


@endsection





