@extends('welcome')

@section('content')


<div class="container">


<div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <hr> 

     <ol>
     
         <li>  Admin Name: {{$admin_profile_view->name}}  </li>
         <li>  Admin  Email: {{$admin_profile_view->email}}  </li>
         
    
     
     
     </ol>



      </div>
    </div>




</div>


@endsection