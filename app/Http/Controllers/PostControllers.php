<?php

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
