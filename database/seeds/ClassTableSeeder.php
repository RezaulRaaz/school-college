<?php

use App\Models\InstituteClass;
use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InstituteClass::create( [
            'class_name'=>'Class One',
            'class_slug'=>'class-one',
        ]);
        InstituteClass::create( [
            'class_name'=>'Class Two',
            'class_slug'=>'class-two',
        ]);
        InstituteClass::create( [
            'class_name'=>'Class Three',
            'class_slug'=>'class-three',
        ]);
        InstituteClass::create( [
            'class_name'=>'Class Four',
            'class_slug'=>'class-four',
        ]);
        InstituteClass::create( [
            'class_name'=>'Class Five',
            'class_slug'=>'class-five',
        ]);
        InstituteClass::create( [
            'class_name'=>'Class Six',
            'class_slug'=>'class-six',
        ]);
        InstituteClass::create( [
            'class_name'=>'Class Seven',
            'class_slug'=>'class-seven',
        ]);
        InstituteClass::create( [
            'class_name'=>'Class Eight',
            'class_slug'=>'class-eight',
        ]);
        InstituteClass::create( [
            'class_name'=>'Class Nine',
            'class_slug'=>'class-nine',
        ]);
        InstituteClass::create( [
            'class_name'=>'Class Ten',
            'class_slug'=>'class-ten',
        ]);
        InstituteClass::create( [
            'class_name'=>'Class Eleven',
            'class_slug'=>'class-eleven',
        ]);
        InstituteClass::create( [
            'class_name'=>'Class Twelve',
            'class_slug'=>'class-seven',
        ]);
    }
}
