<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    function __construct(){
        $this->post = new Post();
    }

    function index()
    {
        $data = array();
        $data["title"] = "Post";
        $data["post"] = $this->post->with("user")->get();
        return view("post",$data);
        // $posts = $this->post->with("user","comments")->get();
        // // print_r(json_encode(Post::all()));
        // //$posts = Post::find(1)->user;
        // print_r(json_encode($posts));
    }

    function detail(Request $request)
    {
        $post_id = $request->segment(3);
        $post = $this->post->find($post_id)->with("user","comments")->first();
        
        $data["post"] = $post;
        $data["title"] = $post->title;
        return view("detail",$data);
    }

    function what()
    {
        echo "what ? ";
    }
}
