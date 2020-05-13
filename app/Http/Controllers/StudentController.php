<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();




class StudentController extends Controller
{
    public function student_dashboard(){


        return view('studentwelcome');
    
      }
      
        // admin logout
    
           public function logout(){
    
              Session::put('name', null);
              Session::put('id', null);
             
            return  Redirect::to('/student');
           }
       
    
    
        //  admin login  
    
        public function login_dashboard (Request $req){
    
    
            $email=$req->email;
            $password=$req->password;
                $result=DB::table('students')
             ->where('email', $email)
              ->where('password', $password)
              ->first();
    
    
              if($result){
            
            
                Session::put('email',$result->email);
                Session::put('id', $result->id);
                return Redirect::to('/student_dashboard');
                   
                
                  }
                
                else{
                
                    return Redirect::to('/student');
               }
    
     }


   

   public function studentprofile(){
    

  //   $student_id=Session::get('id');
  //   $student=DB::table('students')
  //                ->select('*')
  //                 ->where('id',$student_id)
  //                 ->first();   
     


  //  // return view('student.student',compact('student'));


       $student=DB::table('students')
         ->get();   

        return view('student.student', compact('student'));


   }


  
   public function Viewstudent($id){

               $student=DB::table('students')
            ->where('id', $id)
                    ->first();

        return view ('student.view_student')->with('view_student',$student);

   }




   public function editstudent($id){

      
    $student=DB::table('students')
            ->where('id', $id)
             ->first();

  return view ('student.edit_student', compact('student'));
 }



   // update student

      
   public function updatestudent(Request $req, $id){
       
    $data=array();

    $data['name']=$req->name;
    $data['email']=$req->email;

      DB::table('students')
        ->where('id',$id)
        ->update($data);
        return Redirect()->route('Student.profile');


        
  }

  public function deletestudent($id){


    $student=DB::table('students')
                  ->where('id', $id)
                  ->delete();
 
                  if($student){
                   $notification=array(
         
                      'messsage'=>'successfully delete  catagory',
                      'alart-type'=>'success'
                   );
         
                   return Redirect()->back()->with($notification);

}

  }
}