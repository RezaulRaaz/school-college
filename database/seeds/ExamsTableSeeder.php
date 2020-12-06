<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->insert([
            'exam_name'=>'First Term',
            'exam_name_slug'=>'first_term'
        ]);
        DB::table('exams')->insert([
            'exam_name'=>'Second Term',
            'exam_name_slug'=>'scond_term'
        ]);
        DB::table('exams')->insert([
            'exam_name'=>'Test Exam',
            'exam_name_slug'=>'test_exam'
        ]);
        DB::table('exams')->insert([
            'exam_name'=>'Anual Exam',
            'exam_name_slug'=>'anual_term'
        ]);
    }
}
