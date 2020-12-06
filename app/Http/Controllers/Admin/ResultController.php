<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collegeinfo;
use App\Models\Exam;
use App\Models\InstituteClass;
use App\Models\MarkSheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{

    public function index(){
        $instutes = Collegeinfo::all();
        $classes = InstituteClass::all();
       return view('Admin.Result.AddResult');
   }

    public function getdata(){
         $instutes = Collegeinfo::all();
         $classes = InstituteClass::all();
         $exam = Exam::all();
         return response()->json(['institutes'=>$instutes,'classes'=>$classes,'exam'=>$exam]);
    }
    public function store(Request $request){
        $markshet = new MarkSheet();
        $markshet->student_name=$request->student_name;
        $markshet->student_roll=$request->student_roll;
        $markshet->exam_id=$request->selectExam;
        $markshet->student_year=$request->year;
        $markshet->class_id=$request->classSelected;
        $markshet->collegeinfo_id=$request->insSelected;
        $markshet->subject_name=$request->subjectname;
        $markshet->subject_marks=$request->marks;
        $markshet->subject_optional=$request->sub_optional;
        $markshet->save();
        return response()->json(['Success'=>'Successfully Add Markshet']);
    }
    // {roll}/{exam}/{year}/{class}/{institute}

    public function getMarsheet($roll,$exam,$year,$class,$institute){
        $markshet = DB::table('mark_sheets')
        ->where('student_roll','=',$roll)
        ->where('exam_id','=',$exam)
        ->where('student_year','=',$year)
        ->where('class_id','=',$class)
        ->where('collegeinfo_id','=',$institute)
        ->get();

        $total=0;
        $totalSubject=0;
        $isFail=0;

        foreach($markshet as $mark){
             if($mark->subject_marks<33 && $mark->subject_optional==0){
                 $total += 0;
                 $totalSubject += 1;
                 $isFail += 1;
             }elseif($mark->subject_marks<49 && $mark->subject_optional==0){
                 $total += 1.00;
                 $totalSubject += 1;
             }elseif($mark->subject_marks<50 && $mark->subject_optional==0){
                 $total += 2.00;
                 $totalSubject += 1;
             }elseif($mark->subject_marks<60 && $mark->subject_optional==0){
                 $total += 3.00;
                 $totalSubject += 1;
             }elseif($mark->subject_marks<70 && $mark->subject_optional==0){
                 $total += 3.50;
                 $totalSubject += 1;
             }elseif($mark->subject_marks<80 && $mark->subject_optional==0){
                 $total += 4.00;
                 $totalSubject += 1;
             }elseif($mark->subject_marks<=100 && $mark->subject_optional==0){
                 $total += 5.00;
                 $totalSubject += 1;
             }else{
                 $total += 0.00;
                 $totalSubject += 0;
             }

             if($mark->subject_marks<33 && $mark->subject_optional==1){
                 $total += 0;
             }elseif($mark->subject_marks<40 && $mark->subject_optional==1){
                 $total += 0.00;
             }elseif($mark->subject_marks<50 && $mark->subject_optional==1){
                 $total += 0.00;
             }elseif($mark->subject_marks<60 && $mark->subject_optional==1){
                 $total += 1.00;
             }elseif($mark->subject_marks<70 && $mark->subject_optional==1){
                 $total += 1.50;
             }elseif($mark->subject_marks<80 && $mark->subject_optional==1){
                 $total += 2.00;
             }elseif($mark->subject_marks<=100 && $mark->subject_optional==1){
                 $total += 3.00;
             }else{
                 $total += 0.00;
             }

        }
        $Gpa = $total/$totalSubject;
        return response()->json(['marksheet'=>$markshet,'Gpa'=>$Gpa,'isFail'=>$isFail]);
    }
    public function distroy($id){
        $markshet = MarkSheet::find($id)->delete();
        return response()->json(['success'=>'Successfully Deleted Marks']);
    }
}
