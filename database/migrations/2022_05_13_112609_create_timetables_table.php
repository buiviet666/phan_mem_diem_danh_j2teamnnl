<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses');
            $table->foreignId('classroom_id')->constrained('classrooms');
            $table->foreignId('room_id')->constrained('rooms');
            $table->foreignId('lecturer_id')->constrained('lecturers');
            $table->foreignId('duration_id')->constrained('durations');
            $table->integer('shift');
            $table->integer('day');
            $table->integer('semester');
            $table->string('year', 4);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timetables');
    }
}
