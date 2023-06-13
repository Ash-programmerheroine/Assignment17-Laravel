<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
   function demoAction(){
       $posts = DB::table('posts')->select('excerpt', 'description')->get();
       print_r($posts);
   }
}
