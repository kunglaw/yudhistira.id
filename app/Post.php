<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    //Menampilkan list post dengan urutan desc berdasarkan post_id 
    static function list_post()
    {
        return DB::select("SELECT * FROM post_tbl ORDER BY post_id DESC");
    }

    static function list_post_username()
    {
        return DB::select("SELECT a.*, b.* FROM post_tbl a, users b WHERE a.users_id=b.id ");
    }

    static function detail_post($post_id)
    {
        return collect(DB::select("SELECT * FROM post_tbl WHERE post_id = '$post_id' "))->first();
    }

    static function detail_post_username($post_id)
    {
        return collect(DB::select("SELECT a.*, b.* FROM post_tbl a, users b WHERE a.users_id=b.id AND a.post_id = '$post_id' "))->first();
    }

    static function list_comment_username($post_id)
    {
        return DB::select("SELECT a.*, b.*, c.* FROM post_tbl a, users b, comment_tbl c WHERE a.users_id=b.id
        AND a.post_id = c.post_id AND b.id = c.users_id ");
    }
}
