<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubjectController extends Controller
{


   public function index(){
     $category_subject =DB::table('category_subjects')->get();
    return view('Admin.Subject.index',compact('category_subject'));
   }
   public function list(){
    return view('Admin.Subject.subjectList');
    }
    public function store(Request $request){
        $request->validate([
            'subject_name'=>'required',
        ]);

        $slug = Str::slug($request->subject_name,'-');

       $subject = new Subject();
       $subject->subject_name = $request->subject_name;
       $subject->subject_category_id = $request->category_subject;
       $subject->subject_slug = $slug;
       $subject->save();
       toastr()->success('Successfully Add Subject', 'Success', ['timeOut' => 5000]);
       return redirect()->back();

    }
}
