<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendances2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances2', function (Blueprint $table) {
            $table->foreignId('attendance_id')->constrained('attendances');
            $table->foreignId('student_id')->constrained('students');
            $table->integer('status');
            $table->primary(['attendance_id', 'student_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances2');
    }
}
