@extends('welcome')

@section('content')


<div class="container">


<div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
    
            
       
            <a href="{{route('all.posts')}}" class="btn btn-danger"> all post</a>
        <hr> 

        <form action="{{url('update_post/'.$post->id)}}" method="post"     enctype="multipart/form-data" >

           @csrf 
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category Title</label>
              <input type="text" class="form-control" value="{{$post->title}}"   name="title"  id="name" >

            </div>
          </div>


          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Tag</label>


              <select class="form-control" name="category_id">
               @foreach($category as $row)
               <option value="{{$row->id}}"  <?php if($row->id == $post->category_id)   echo" selected"; ?>   > {{$row->name}} </option>
               @endforeach
               </select>

            </div>
          </div>


  
          <div class="control-group">
            <div class="form-group col-xs-12 ">
              <label>Category Image</label>
              <input type="file" class="form-control"    name="image" > <br>
  
             Old Image <img src="{{URL::to($post->image)}}"   style="height: 80px;  width:80px;">

             <input type="hidden" name="old_photo"  value="{{$post->image}}">
             
   
            </div>
          </div>


          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category Details</label>
           
              <input type="text" class="form-control" value="{{$post->details}}"   name="details"  id="name" >
 
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