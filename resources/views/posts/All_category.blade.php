@extends('welcome')

@section('content')


<div class="container">


<div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
    
            
            <a href="{{route('add.category')}}" class="btn btn-danger"> Add Tag</a>
            <a href="" class="btn btn-info"> All Tag</a>
        
    
        <hr> 
       
       <table  class="table table-responsive">

        <tr>
        
           <th>   ID </th>
           <th> TAG  Name </th>
           <th>   SLUG Name </th>
           <th>  Action </th>
        </tr>
        
     
     @foreach($category as $all_categories)
         <tr>
         
            <td> {{$all_categories->id}} </td>
            <td> {{$all_categories->name}}</td>
            <td> {{$all_categories->slug}} </td>
            <td>  
              
              <a href="{{URL::to('view_category/'.$all_categories->id )}}"  class=" btn btn-sm btn-info"> View </a>
              <a href="{{URL::to('edit_category/'.$all_categories->id )}}"  class="  btn btn-sm btn-danger"> Update </a>
              <a href="{{URL::to('delete_category/'.$all_categories->id )}}" id="delete" class="  btn btn-sm btn-success"> Delete  </a>
            
            
             </td>
         
         </tr>
       
       @endforeach
       
       
       
       </table>
      




      </div>
    </div>




</div>


@endsection