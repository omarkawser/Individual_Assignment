@extends('welcome')

@section('content')




<div class="container">


<div class="row">
      <div class="col-lg-12 col-md-12 mx-auto">
    
     
        <hr> 
       
       <table  class="table table-responsive">
   
        <tr>
        
           <th> Admin  Name</th>
           <th> Admin  EMAIL </th>
           <th>  Action </th>
        </tr>
      
         <tr>
         
            <td>  {{$admin_profile->name}}</td>
            <td>  {{$admin_profile->email}}</td>
            
            <td>  
              
            <a href="{{URL::to('view_admin/'.$admin_profile->id )}}"  class=" btn btn-sm btn-info">  Profile  View </a>
            <a href="{{URL::to('/edit_admin/'.$admin_profile->id )}}"  class="  btn btn-sm btn-danger"> Change Information </a>
            
            


             </td>
         
         </tr>
       
      
        
       
       
       
       </table>
      




      </div>
    </div>




</div>




@endsection