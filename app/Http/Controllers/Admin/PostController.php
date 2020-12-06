<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use File;


class PostController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('Admin.Post.index',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'Description'=>'required',
            'image'=>'required','image|mimes:jpeg,png,jpg,gif,svg',
            'category'=>'required',
        ]);
        $date= date("FY");

        function make_slug($string) {
            return preg_replace('/\s+/u', '-', trim($string));
        }
        $slug = make_slug($request->title);
       $file=$request->file('image');
        $fileSizeBytes = filesize($file);
        $sizeInKB = floor(($fileSizeBytes/1024));
        if(5024 >=$sizeInKB){
            $imageName = $date.'/'.$slug.'.'.$file->getClientOriginalExtension();
//            dd($imageName);
            if(!File::exists('images/post/'.$date)) {
                File::makeDirectory('images/post/'.$date,0777,true);
            }
            $destinationPath = 'images/post/'.$date;
            $file->move($destinationPath, $imageName);

          $post = new Post();
          $post->post_title = $request->title;
          $post->post_description = $request->Description;
          $post->post_slug = $slug;
          $post->user_id = Auth::user()->id;
          $post->post_status = 1; //aproved
          $post->post_publish = $request->published ; //publish
          $post->post_image = $imageName;
          $post->post_meta = $request->meta;
          $post->ppc = $request->postPublishedCategory;
          if($post->save()){
            $post->categories()->attach($request->category);
            toastr()->success('Successfully Add Post', 'Success', ['timeOut' => 5000]);
            return redirect()->route('admin.post.list');
          }

        //   $post->categories()->sync($request->category); for update posts

        }else{
            toastr()->warning('Your Image is More than 5 MB', 'Warning', ['timeOut' => 5000]);
            return redirect()->back();
        }

    }

    public function show(){
       $posts= Post::where('ppc','post')->orWhere('ppc','featuredPost')->orderBy('id')->get();
       return view('Admin.Post.postList',compact('posts'));
    }

    public function edit($id){
        $posts= Post::where("id",$id)->first();
        $categories = Category::all();
        return view('Admin.Post.edit',compact(['posts','categories']));
    }

    public function update(Request $request, $id){

        $request->validate([
            'title'=>'required',
            'Description'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg',
            'category'=>'required',
        ]);
        $date= date("FY");
        function make_slug($string) {
            return preg_replace('/\s+/u', '-', trim($string));
        }
        $slug = make_slug($request->title);

       $file=$request->file('image');

        $fileSizeBytes = filesize($file);

        $sizeInKB = floor(($fileSizeBytes/1024));

        $post= Post::find($id);

        if (!empty($file)){

                if( 1024 >=  $sizeInKB){
                    $imageName = $date.'/'.$slug.'.'.$file->getClientOriginalExtension();
                    if (File::exists(public_path('/images/post/'.$post->post_image))) {
                        File::delete(public_path('/images/post/'.$post->post_image));
                    }

                    if (!File::exists("images/post/".$date)) {
                        File::makeDirectory("images/post/".$date,0777,true);
                    }
                    $destinationPath = 'images/post/'.$date;
                    $file->move($destinationPath, $imageName);
                }else{
                    toastr()->warning('Your Image is More than 1 MB', 'Warning', ['timeOut' => 5000]);
                    return redirect()->back();
                }
        }else{
            $imageName = $post->post_image;
        }
        $post->post_title = $request->title;
        $post->post_description = $request->Description;
        $post->post_slug = $slug;
        $post->post_status = $request->status; //aproved
        $post->post_publish = $request->published ; //publish
        $post->post_image = $imageName;
        $post->post_meta = $request->meta;
        $post->ppc = $request->postPublishedCategory;
        if($post->save()){
          $post->categories()->attach($request->category);
          toastr()->success('Successfully Add Post', 'Success', ['timeOut' => 5000]);
          return redirect()->route('admin.post.list');
        }

    }

    public function distroy($id){
        $posts= Post::where("id",$id)->first();
        if (File::exists(public_path('/images/post/'.$posts->post_image))) {
            File::delete(public_path('/images/post/'.$posts->post_image));
        }
        $posts->categories()->detach();
        $posts->delete();
        if($posts){
            toastr()->success('Your Post Deleted', 'success', ['timeOut' => 5000]);
            return redirect()->back();
        }
    }

    public function noticeShow(){
        $posts= Post::where('ppc','notice')->orderBy('id')->get();
        return view('Admin.Post.notice_list',compact('posts'));
    }


}
