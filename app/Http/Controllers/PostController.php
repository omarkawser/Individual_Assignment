<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  DB; 
use Illuminate\Support\Facades\Session;

class postController extends Controller
{
   public function writePost(){
    
    $category=DB::table('catagories')
                  ->get();   

    return view('posts.writepost', compact('category'));
   }


   public function deletepost($id){


      $post=DB::table('tags')
                    ->where('id', $id)
                    ->delete();
   
                    if($post){
                     $notification=array(
           
                        'messsage'=>'successfully delete  catagory',
                        'alart-type'=>'success'
                     );
                    
                     return Redirect()->route('all.posts')->with($notification);
                     
   
     }
   }


   public function store_post(Request  $req){

     $data=array();


         $data['title']=$req->title;
         $data['category_id']=$req->category_id;
         $data['details']=$req->details;
        

         $image=$req->file('image');

         if($image){

            $image_name=hexdec(uniqid());
            $next=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name. '.'.$next;
            $upload_path='public/frontend/image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('tags')->insert($data);
 
         //    $notification=array( 
         //     'message'=>'successfully add student',
         //     'alert-type'=>'success'
         // );
 
         Session::put('exception', 'successfully add student');



         $notification=array(

            'messsage'=>'successfully insert catagory',
            'alart-type'=>'success'
         );
   
         return Redirect()->back()->with($notification);


         }

         else{
                     
           
      
  
     }
    

   }

   
   
   public function all_post(){

    
      // $post=DB::table('tags')->get();

     $post=DB::table('tags')
           ->join('catagories','tags.category_id','catagories.id')
           ->select('tags.*','catagories.name')
           //->get();
         ->paginate(3);


      return view('posts.allpost', compact('post'));

    }



    public function edit_post($id){

     $category=DB::table('catagories')->get();
      $post=DB::table('tags')
               ->where('id', $id)
                ->first();

      return view('posts.post_view', compact('category','post'));
      
      



    }
    

    public function update_post(Request  $req, $id){

      $data=array();
 
 
          $data['title']=$req->title;
          $data['category_id']=$req->category_id;
          $data['details']=$req->details;
         
 
          $image=$req->file('image');
 
          if($image){
 
             $image_name=hexdec(uniqid());
             $next=strtolower($image->getClientOriginalExtension());
             $image_full_name=$image_name. '.'.$next;
             $upload_path='public/frontend/image/';
             $image_url=$upload_path.$image_full_name;
             $success=$image->move($upload_path,$image_full_name);
             $data['image']=$image_url;

            unlink($req->old_photo);
             DB::table('tags')
             ->where ('id', $id)
             ->update($data);

          $notification=array(
             'messsage'=>'successfully update',
             'alart-type'=>'success'
          );
          return Redirect()->route('all.posts')->with($notification);
          }
          else{           
            $data['image']=$req->old_photo;
            DB::table('tags')
            ->where ('id', $id)
            ->update($data);
            $notification=array(
               'messsage'=>'successfully  update',
               'alart-type'=>'success'
            );
            return Redirect()->route('all.posts')->with($notification);
   
      }
     


   


 
    }

    








}
