@extends('studentwelcome')

@section('content')


<div class="container">


<div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
    
            
       
        
    
        <hr> 


     <ol>
     
         <li>  Student Name: {{$view_student->name}}  </li>
         <li>  Student Email: {{$view_student->email}}  </li>
         
    
     
     
     </ol>



      </div>
    </div>




</div>


@endsection