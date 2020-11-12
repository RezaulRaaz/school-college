<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_subjects')->insert([
            'category_subject_name'=>'School',
            'category_subject_slug'=>'school'
        ]);

        DB::table('category_subjects')->insert([
            'category_subject_name'=>'College',
            'category_subject_slug'=>'college'
        ]);

        DB::table('category_subjects')->insert([
            'category_subject_name'=>'University',
            'category_subject_slug'=>'university'
        ]);

        DB::table('category_subjects')->insert([
            'category_subject_name'=>'Courses',
            'category_subject_slug'=>'courses'
        ]);
        DB::table('category_subjects')->insert([
            'category_subject_name'=>'Others',
            'category_subject_slug'=>'other'
        ]);
    }
}
