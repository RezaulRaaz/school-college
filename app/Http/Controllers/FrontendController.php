<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function welcome(){
        $notices = Post::where('ppc','=','notice')
        ->where('post_publish','=','on')
        ->get();
        return view('welcome',compact('notices'));
    }

    public function posts(){
        $posts=Post::where('ppc','post')
            ->orWhere('ppc','featuredPost')
            ->where('post_status',1)
            ->where('post_publish','on')
            ->with('categories')
            ->orderBy('created_at','DESC')
            ->get();
        return view('Frontend_Pages.posts',compact('posts'));
    }
    public function singlePost($title,$id){
        $post=Post::
            where('id',$id)
            ->where('ppc','post')
            ->where('post_status',1)
            ->orWhere('ppc','featuredPost')
            ->where('post_publish','on')
            ->with('categories')
            ->first();
        return view('Frontend_Pages.single_post',compact('post'));
    }

    public function notices(){
        $notices=Post::where('ppc','notice')
            ->where('post_status',1)
            ->where('post_publish','on')
            ->with('categories')
            ->orderBy('created_at','DESC')
            ->get();
        return view('Frontend_Pages.Notice.notice',compact('notices'));
    }

    public function singleNotices($title,$id){
        $notice=Post::
        where('id',$id)
            ->where('ppc','notice')
            ->where('post_status',1)
            ->where('post_publish','on')
            ->with('categories')
            ->first();
        return view('Frontend_Pages.Notice.single_notice',compact('notice'));
    }

}
