<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::paginate(15);
        return view('Admin.Category.index',compact('category'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'category'=>'required',
        ]);
        $slug = Str::slug($request->category, '-');

        $data =[
            'category'=>$request->category,
            'slug'=>$slug,
            'created_at'=>Carbon::Now(),
        ];
        Category::insert($data);
        toastr()->success('Successfully Add Category', 'Success', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function distory($id){
        Category::find($id)->delete();
        toastr()->success('Successfully Delele Category', 'Success', ['timeOut' => 5000]);
        return redirect()->back();
    }
}
