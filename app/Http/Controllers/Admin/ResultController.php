<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collegeinfo;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index(){
         $instutes = Collegeinfo::all();
        return view('Admin.Result.index',compact('instutes'));
    }
}
