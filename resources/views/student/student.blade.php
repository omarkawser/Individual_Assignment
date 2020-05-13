@extends('studentwelcome')

@section('content')


<div class="container">


<div class="row">
      <div class="col-lg-12 col-md-10 mx-auto">
    
     
        <hr> 
       
       <table  class="table table-responsive">

        <tr>
        
           <th> STUDENT  Name</th>
           <th> STUDENT  EMAIL </th>
           <th>  Action </th>
        </tr>

        
     
         @foreach($student  as $studentinfo)
         <tr>
         
            <td> {{$studentinfo->name}} </td>
            <td>  {{$studentinfo->email}}</td>
            
            <td>  
              
            <a href="{{URL::to('view_student/'.$studentinfo->id)}}"  class=" btn btn-sm btn-info"> View </a>
            <a href="{{URL::to('edit_student/'.$studentinfo->id)}}"  class="  btn btn-sm btn-danger"> Update </a>
              <a href="{{URL::to('delete_student/'.$studentinfo->id )}}" id="delete" class="  btn btn-sm btn-success"> Delete  </a>>
            
            


             </td>
         
         </tr>
       
       @endforeach
       
       
       
       </table>
      




      </div>
    </div>




</div>


@endsection