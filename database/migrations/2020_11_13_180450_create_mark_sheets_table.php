<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mark_sheets', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_roll');
            $table->string('student_year');

            $table->unsignedBigInteger('exam_id');
            $table->foreign('exam_id')->references('id')->on('exams');

            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('institute_classes');

            $table->unsignedBigInteger('collegeinfo_id');
            $table->foreign('collegeinfo_id')->references('id')->on('collegeinfos')->onDelete('cascade');

            $table->string('subject_name');
            $table->string('subject_marks');
            $table->string('subject_optional')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mark_sheets');
    }
}
