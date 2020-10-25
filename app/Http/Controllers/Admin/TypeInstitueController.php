<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Typeinstitute;
use Illuminate\Support\Str;

class TypeInstitueController extends Controller
{
    public function index(){
        $types=Typeinstitute::all();
        return view('Admin/Pages/Typeinstitute',compact('types'));
    }
    public function store(Request $request){

        $slug = Str::slug($request->typename,'-');
        $type= new Typeinstitute();
        $type->name=$request->typename;
        $type->slug= $slug;
        $type->save();
        return redirect()->back();

    }
}
