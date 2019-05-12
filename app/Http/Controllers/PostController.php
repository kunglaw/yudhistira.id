<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //

    function index()
    {
        $data = array();
        $data["title"] = "Post";
        $data["post"] = Post::list_post_username();
        return view("post",$data);
    }

    function detail(Request $request)
    {
        $post_id = $request->segment(3);
        $post = Post::detail_post_username($post_id);
        $comment = POST::list_comment_username($post_id);
        $data["post"] = $post;
        $data["comment"] = $comment;
        $data["title"] = $post->title;
        return view("detail",$data);
    }

    function what()
    {
        echo "what ? ";
    }
}
