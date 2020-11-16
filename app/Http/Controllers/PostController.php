<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
   /*public function addPost(){
       return view('add-post');
   }*/

   public function createPost(Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        //header("Refresh: 2; url=/posts");
        return "Post has been created!";
   }

    public function getPosts(){
       $posts = Post::all();
       return ['post'=>$posts];
    }

    public function deletePost($id){
       Post::where('id',$id)->delete();
       //header("Refresh: 2; url=/posts");
       return "Post deleted!";
    }

    public function getPost($id){
       $post = DB::table('posts')
           ->where('id',$id)->first();
       return ['post' => $post];
    }

    public function updatePost(Request $request){
       $post = Post::where('id',$request->id)->first();
       $post->title = $request->title;
       $post->body = $request->body;
       $post->save();
       //header("Refresh: 2; url=/posts");
       return "Post updated!";
    }

    public function updateForm($id){
       $post = Post::where('id',$id)->first();
       return ['post'=>$post];
    }
}
