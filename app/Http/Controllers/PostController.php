<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
/**
 * Post一覧の表示
 * 
 * @params Post Postモデル
 * @return array Postモデル 
 /**
  * 
  */
class PostController extends Controller
{
    public function index(Post $post) //インポートしたPostをインスタンス化して使用する
    {
        return view('posts/index')->with(['posts' => $post->get()]);
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
}