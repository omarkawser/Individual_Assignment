<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;



class DashboardController extends Controller
{
 

    public function Index(){
 
        $post=DB::table('tags')
         ->join('catagories', 'tags.category_id', 'catagories.id')
         ->select('tags.*' ,'catagories.name' ,'catagories.slug')
         // ->get();
         ->paginate(6);
 
     return view('pages.index', compact('post'));
 
    }
 
    
 }
 