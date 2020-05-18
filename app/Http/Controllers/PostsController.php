<?php

namespace App\Http\Controllers;

use DB;
use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug) {


      //  $post = DB::table('Posts')->where('slug', $slug)->first();

      $post = Post::where('slug', $slug)->firstOrFail();


          //  if(! $post) {
          //      abort('404');
          //  }
           // $posts = [
            //    'my-first-post' => 'Hey, this is my first blog post!',
           //     'my-second-post' => 'Hey, this is mysjdktfnkhtn vdfghfkjn dsjktblog post!'
          //  ];
    
    
        return view('post', ['post' => $post]);
    
}
}
