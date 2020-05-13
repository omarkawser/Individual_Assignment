@extends('studentwelcome')

@section('content')




<div class="container">


<div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
    
            
    
        
    
        <hr> 

        <form action="{{URL::to('/update_student/'.$student->id)}}"  method="post">

         @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label> Name</label>
              <input type="text" class="form-control" value="{{ $student-> name}}" name="name" >
 
            </div>  
          </div>



          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label> Name</label>
              <input type="text" class="form-control" value="{{$student->email}}"   name="email"></textarea>
 
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