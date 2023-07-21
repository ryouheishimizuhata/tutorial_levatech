<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
	//    }
	//    }
	//    ?><?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
/**
 * Post一覧の表示
 * 
 * @params Post Postモデル
 * @return array Postモデル 
 */
public function index(Post $post) //インポートしたPostをインスタンス化して使用する
{
    return $post->get(); //$postを戻り値にする
}

class PostControllers extends Controller
{
    //
}
