<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();


class AdminController extends Controller
{
    public function admin_dashboard(){


        return view('welcome');
    
      }
      
        // admin logout
    
           public function logout(){
    
              Session::put('name', null);
              Session::put('id', null);
             
            return  Redirect::to('/admin');
           }
       
    
    
        //  admin login  
    
        public function login_dashboard (Request $req){
    
    
            $email=$req->email;
            $password=$req->password;
                $result=DB::table('admins')
             ->where('email', $email)
              ->where('password', $password)
              ->first();
    
    
              if($result){
            
            
                Session::put('email',$result->email);
                Session::put('id', $result->id);
                return Redirect::to('/admin_dashboard');
                   
                
                  }
                
                else{
                
                    return Redirect::to('/admin');
               }
    
     }



     public function admin_profile(){
   


      $admin_id=Session::get('id');
      $admin_profile=DB::table('admins')
                 ->select('*')
                 ->where('id',$admin_id)
                 ->first();
   
            //'print_r($student_profile);     

      //  return view('admin.admin_profile');
        //eturn view ('admin.admin_profile', compact('admin_profile'));


        return view ('admin.admin_profile', compact('admin_profile'));

     }



          public function viewadmin($id){

             $admin_profile_view=DB::table('admins')
                   ->select('*')
                ->where('id', $id)
                ->first();
  
                return view('admin.admin_profile_view', compact('admin_profile_view'));

     }



     public function editadmin($id){
   
      $admin_profile_update=DB::table('admins')
            ->select('*')
         ->where('id', $id)
         ->first();
         return view('admin.admin_profile_update', compact('admin_profile_update'));

}


     
     public function updateadmin(Request $req, $id){
   

      $data=array();

      $data['name']=$req->name;
      $data['email']=$req->email;
     
             DB::table('admins')
                ->where('id', $id)
                ->update($data);

                return Redirect::to('/admin/profile');
     

             

     }









}
