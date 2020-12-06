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
}
