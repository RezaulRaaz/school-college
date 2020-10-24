<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegecontactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collegecontacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('college_id');
            $table->foreign('college_id')->references('id')->on('collegeinfos');
            $table->string('p_name')->nullable();
            $table->string('p_number')->nullable();
            $table->string('v_name')->nullable();
            $table->string('v_number')->nullable();
            $table->string('college_code')->nullable();
            $table->string('website')->nullable();
            $table->string('map')->nullable();
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
        Schema::dropIfExists('collegecontacts');
    }
}
