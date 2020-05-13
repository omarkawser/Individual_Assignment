@extends('welcome')

@section('content')




<div class="container">


<div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
    
            
            <a href="{{route('add.category')}}" class="btn btn-danger"> Add TAG</a>
            <a href="{{route('all.category')}}" class="btn btn-info"> All TAG</a>
        
    
        <hr> 


     <ol>
     
         <li>  TAG id: {{$view_categories->id}}  </li>
         <li>  TAG Name: {{$view_categories->name}}  </li>
         <li>   TAG Slug: {{$view_categories->slug}}  </li>
    
     
     
     </ol>



      </div>
    </div>




</div>


@endsection