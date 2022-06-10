<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursedetails', function (Blueprint $table) {
            $table->id();
            /* $table->string('name'); */
            /* $table->integer('total_modules')->default('0'); */
            /* $table->unsignedBigInteger('category_id'); */
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('studentcourse_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('resource_id');
            $table->unsignedBigInteger('requirement_id');
            $table->unsignedBigInteger('module_id');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('studentcourse_id')->references('id')->on('studentcourses')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('requirement_id')->references('id')->on('requirements')->onDelete('cascade');
            $table->foreign('resource_id')->references('id')->on('resources')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coursedetails');
    }
};
