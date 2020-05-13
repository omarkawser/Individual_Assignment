@extends('welcome')

@section('content')


<div class="container">


<div class="row">
      <div class="col-lg-12  mx-auto">
    
            
            <a href="{{route('write.post')}}" class="btn btn-danger"> write TAG </a>
            <a href="" class="btn btn-info"> All Tag</a>
        
    
        <hr> 
       
       <table  class="table table-responsive">

        <tr>
        
           <th>   ID </th>
           <th> TAG   </th>
           <th>   title </th>
           <th>  image </th>
        </tr>
     
     @foreach($post as $all_post)
         <tr>
         
            <td> {{$all_post->id}} </td>
            <td> {{$all_post->name}}</td>
            <td> {{$all_post->title}} </td>
          
            <th>  <img src="{{URL::to($all_post->image)}}"   style="height: 40px;  width=70px;"   alt=""> </th>
            <td>  
              


              <a href="{{URL::to('edit_post/'.$all_post->id )}}" class="  btn btn-sm btn-danger"> View </a>
              <a href="{{URL::to('delete_post/'.$all_post->id )}}" id="delete" class="  btn btn-sm btn-success"> Delete  </a>
            
            
             </td>
         
         </tr>
       
       @endforeach
       
       
       
       </table>
      
       {{ $post->links() }}
  


      </div>
    </div>



@endsection