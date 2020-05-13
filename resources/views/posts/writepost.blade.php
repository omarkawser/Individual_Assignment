@extends('welcome')

@section('content')


<div class="container">


<div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
    
            
    
            <a href="{{route('all.posts')}}" class="btn btn-danger"> all category</a>
        
    
        <hr> 

        <form action="{{Route('add_post')}}"    method="post"     enctype="multipart/form-data" >

           @csrf 
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Title</label>
              <input type="text" class="form-control" placeholder="Name"   name="title"  id="name" >

            </div>
          </div>


          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category</label>


              <select class="form-control" name="category_id">
               @foreach($category as $row)
               <option value="{{$row->id}}"> {{$row->name}} </option>
               @endforeach
               </select>

            </div>
          </div>


  
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Post Image</label>
              <input type="file" class="form-control" name="image" required >
   
            </div>
          </div>


          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Details</label>
           
              <input type="text" class="form-control" placeholder="Details"   name="details"  id="name" >
 
            </div>
          </div>

          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Upload</button>
          </div>
        </form>
      </div>
    </div>

</div> 



@endsection