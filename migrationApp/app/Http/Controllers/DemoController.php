<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
   function demoAction(){
       $posts = DB::table('posts')->select('excerpt', 'description')->get();
//       print_r($posts);
       $posts = DB::table('posts')->where('id', 2)->first();
//       return $posts->description;
       $posts = DB::table('posts')->where('id', 2)->value('description');
//       return $posts;
       $posts = DB::table('posts')->pluck('excerpt');
//       print_r($posts);
       $result = DB::table('posts')->insert([
           'title' => 'X',
           'slug' => 'X',
           'excerpt' => 'excerpt',
           'description' => 'description',
           'is_published' => true,
           'min_to_read' => 2,
       ]);

       return $result ? 'Record inserted successfully.' : 'Failed to insert record.';

//       $affectedRows = DB::table('posts')
//           ->where('id', 2)
//           ->update([
//               'excerpt' => 'Laravel 10',
//               'description' => 'Laravel 10',
//           ]);
//
//       echo 'Number of affected rows: ' . $affectedRows;
//       $affectedRows = DB::table('posts')->where('id', 3)->delete();
//       echo 'Number of affected rows: ' . $affectedRows;


//       $count = DB::table('posts')->count();
//       echo 'Number of posts: ' . $count;
//       $total = DB::table('sales')->sum('amount');
//       echo 'Total sales amount: ' . $total;
//       $average = DB::table('products')->avg('price');
//       echo 'Average product price: ' . $average;
//
//       $max = DB::table('employees')->max('age');
//       echo 'Maximum employee age: ' . $max;
//
//       $min = DB::table('products')->min('price');
//       echo 'Minimum product price: ' . $min;



//       $posts = DB::table('posts')
//           ->whereNot('status', 'published')
//           ->get();

//       print_r($posts);
//
//       $exists = DB::table('posts')->where('status', 'published')->exists();
//
//       if ($exists) {
//           echo 'There are published posts.';
//       } else {
//           echo 'There are no published posts.';
//       }



//       $posts = DB::table('posts')
//           ->whereBetween('min_to_read', [1, 5])
//           ->get();
//
//       print_r($posts);
//
//
//       $affectedRows = DB::table('posts')
//           ->where('id', 3)
//           ->increment('min_to_read');
//
//       echo 'Number of affected rows: ' . $affectedRows;



   }
}
