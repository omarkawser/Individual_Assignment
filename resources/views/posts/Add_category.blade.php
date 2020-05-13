@extends('welcome')

@section('content')


<div class="container">


<div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
    
            
            <a href="{{route('add.category')}}" class="btn btn-danger"> Add TAG</a>
            <a href="{{route('all.category')}}" class="btn btn-info"> All TAG</a>
        
    
        <hr> 

        <form action="{{route('store.category')}}"  method="post">

         @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>TAG Name</label>
              <input type="text" class="form-control" placeholder=" Tag  Name" name="name"   >
 
            </div>  
          </div>



          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Slug Name</label>
              <textarea rows="5" class="form-control" placeholder="Slug Name"   name="slug"></textarea>
 
            </div>
          </div>
          <br>


          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" >Submit</button>
          </div>
        </form>
      </div>
    </div>




</div>


@endsection