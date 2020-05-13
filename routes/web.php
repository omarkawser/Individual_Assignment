<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 

    // Route::get('/', function () {
    //     return view('welcome');
// });

// Route::get('/about', function(){

//     return view('fronted.about');
// });


// Route::get('/home', 'AuthorController@index')->name('home');


      // author

      Route::get('/student', function () {
        return view('student_login');
    });

    Route::post('/studentlogin','StudentController@login_dashboard');
    Route::get('/student_dashboard','StudentController@student_dashboard');






 Route::get('/admin', function () {
     return view('admin_login');
 });
 Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');


Route::get('admin/profile', 'AdminController@admin_profile')->name('admin.profile');

 //view admin
 Route::get('/view_admin/{id}', 'AdminController@viewadmin'); 

// update view admin

Route::get('/edit_admin/{id}', 'AdminController@editadmin');


 // update  admin
 Route::post('/update_admin/{id}', 'AdminController@updateadmin');






// log out
Route::get('/logout', 'AdminController@logout');





// // //index
 Route::get('/', 'RootController@MainIndex')->name('index');
//contact
 Route::get('contact/us', 'RootController@contact')->name('contact');
// //about
  Route::get('about/us', 'RootController@about')->name('about');

           /// main Dashboard 
Route::get('Dashboard', 'DashboardController@Index')->name('Dashboard');

                         // ADD  CATEGORY HERE 
Route::get('add/category', 'categoryController@Addcategory')->name('add.category');
Route::POST('store/category', 'categoryController@Storecategory')->name('store.category');
Route::get('all/category', 'categoryController@Allcategory')->name('all.category');
//view category
Route::get('view_category/{id}', 'categoryController@Viewcategory');
// delete category 
Route::get('delete_category/{id}', 'categoryController@deletecategory');
// edit category
Route::get('edit_category/{id}', 'categoryController@editcategory');
// update category
Route::post('update_category/{id}', 'categoryController@updatecategory');

                // END  CATEGORY HERE 

               // ADD POST HERE
Route::get('write/post', 'postController@writePost')->name('write.post');
// add post
Route::post('store/post', 'postController@store_post')->name('add_post');
//show all post
Route::get('all/post', 'postController@all_post')->name('all.posts');
//edit post
Route::get('edit_post/{id}', 'postController@edit_post');

// update post

Route::post('update_post/{id}', 'postController@update_post');

// delete post
Route::get('delete_post/{id}', 'postController@deletepost');












   //           STUDENT 

   Route::get('Student/profile', 'StudentController@studentprofile')->name('Student.profile');
   Route::get('/logout', 'StudentController@logout');

 //view category
Route::get('view_student/{id}', 'StudentController@Viewstudent');
// delete category 
Route::get('delete_student/{id}', 'StudentController@deletestudent');
// edit category
Route::get('edit_student/{id}', 'StudentController@editstudent');
// update category
Route::post('update_student/{id}', 'StudentController@updatestudent');  
