<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Typeinstitute;
use App\Models\Collegeinfo;
use Illuminate\Http\Request;

class CollegeInfoController extends Controller
{
   public function index(){
    $types=Typeinstitute::all();
    return view('Admin/Pages/college',compact('types'));
   }
   public function store(Request $request){

    $institute= new Collegeinfo();
    $institute->name=$request->name;
    $institute->email=$request->email;
    $institute->user_id =1;
    $institute->mobile=$request->mobile;
    $institute->type_id =$request->type_id;
    $institute->adress=$request->address;
    $institute->description=$request->description;
    $institute->start_year=$request->Start_year;
    $institute->logo='fkldsjkl';
    $institute->save();
   }
}
