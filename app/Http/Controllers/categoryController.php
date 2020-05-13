<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class categoryController extends Controller
{
   public function Addcategory(){

    return view ('posts.Add_category');
   }


   public function editcategory($id){

      
        $category=DB::table('catagories')
                ->where('id', $id)
                 ->first();

      return view ('posts.edit_category', compact('category'));
     }
        
        // update category 

        

        public function updatecategory(Request $req, $id){
       
         $data=array();
   
         $data['name']=$req->name;
         $data['slug']=$req->slug;
   
           DB::table('catagories')
             ->where('id',$id)
             ->update($data);
       
               
             return Redirect()->route('all.category');
   
   
             
       }
   
   





      // store category 
  public function Storecategory(Request  $request) {
    
   $data= array();
   $data['name']=$request->name;
   $data['slug']=$request->slug;
    $category=DB::table('catagories')->insert($data);

    if($category){
          $notification=array(

             'messsage'=>'successfully insert catagory',
             'alart-type'=>'success'
          );

          return Redirect()->route('all.category')->with($notification);
    }


    else{
              
      $notification=array(

         'messsage'=>'successfully insert catagory',
         'alart-type'=>'success'
      );

      return Redirect()->back()->with($notification);
    }

  }


  public function Allcategory(){


   $category=DB::table('catagories')
                ->get();

     return view ('posts.All_category', compact('category'));



  }

  // view category 



  public function Viewcategory($id){


   $category=DB::table('catagories')
                 ->where('id', $id)
                 ->first();

     return view ('posts.view_category')->with('view_categories',$category);

     


  }

      
  public function deletecategory($id){


   $category=DB::table('catagories')
                 ->where('id', $id)
                 ->delete();

                 if($category){
                  $notification=array(
        
                     'messsage'=>'successfully delete  catagory',
                     'alart-type'=>'success'
                  );
        
                  return Redirect()->back()->with($notification);

  }

  }











}
